<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Answer;
use App\Models\Answerer;
use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    } 

    public function logged() {

        return  view('admin.logged');  
    }

     //////////////////////\\\\\\\\\\\\\\\\\\\\
     ////////////////Chart\\\\\\\\\\\\\\\\\\\\\
     ////////////////////\\\\\\\\\\\\\\\\\\\\\\\

    public function graphdata()
    {
        $graphData = [];

        array_push($graphData, $this->getStatFromIdQuestionForPieChart(5));
        array_push($graphData, $this->getStatFromIdQuestionForPieChart(6));
        array_push($graphData, $this->getStatFromIdQuestionForPieChart(9));
        array_push($graphData, $this->getStatFromIdQuestionForRadarChart(
        [
            [
                'id' => 10,
                'description' => "Qualité de l'image",
            ],
            [
                'id' => 11,
                'description' => "Confort d'utilisation",
            ],
            [
                'id' => 12,
                'description' => "Connection réseau",
            ],
            [
                'id' => 13,
                'description' => "Qualité des graphisme",
            ],
            [
                'id' => 14,
                'description' => "Qualité audio",
            ],
        ], "Qualité"));

        return view('admin.home', ['graphData' => $graphData]);
    }

    private function getStatFromIdQuestionForPieChart($id){
        $question = Question::where('id', $id)->first();
        // dd($question);
        $stats = [];
        foreach (($question->choice) as $choice) {
            $count = $question->answer()->where('description', $choice)->count();
            $statChoice = [
                'description' => $choice,
                'count' => $count,
            ];
            array_push($stats, $statChoice);
        }

        return [
            'stats' => $stats,
            'description' => $question->description,
            'type' => 'pie'
        ];
    }
    private function getStatFromIdQuestionForRadarChart(array $questions, string $description){
        $stats = [];
        $total = Answerer::where('status', true)->count(); // Total de formulaires remplis
        foreach ($questions as $question) {
            $count = 0;
            $answers = Answer::where('question_id', $question['id'])->get();
            foreach ($answers as $answer) {
                $count += $answer->answers; // On additionne les points de tous les formulaires pour chaque question
            }
            $count = round( ($count / count($answers) ), 2 ); // MOYENNE
            $result = [
                'description' => $question['description'],
                'count' => $count,
            ];
            array_push($stats, $result);
        }
        return [
            'stats' => $stats,
            'description' => $description,
            'label' => "Moyenne sur $total personnes",
            'type' => 'radar'
        ];

        return  view('admin.home', ['graphData' => $graphData]);
    }
    //////////////////////\\\\\\\\\\\\\\\\\\\\\\\
    /////////////////Question\\\\\\\\\\\\\\\\\\\\\
    ////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\

    public function questions()
    {
        $questions = Question::get();
        $questionsData = [];
        foreach ($questions as $question) {
            array_push($questionsData, [
                'description' => $question->description,
                'type' => $question->type,
                'nth' => ($question->id),
            ]);
        }    
        return view('admin.questions',['questions' => $questionsData]);
    }  
    
    //////////////////////\\\\\\\\\\\\\\\\\\\\\\\
    /////////////////Reponse\\\\\\\\\\\\\\\\\\\\\
    ////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\
    public function answersUsers()
    {
        $answersData = [];
        $answerers = Answerer::where('status', true)->get();
        foreach ($answerers as $answerer) {
            $userToken= $answerer->access_token;
            foreach(Answer::where('answerers_access_token', $userToken)->get() as $answer) {
            $answersData[] = $answer;
            }
            // dd($answersData);
        }
        return view('admin.answer_user',['answerer' => $userToken], ['answers' => $answersData] );
    }   
    
    //////////////////////\\\\\\\\\\\\\\\\\\\\\\\
    /////////////////Quiz\\\\\\\\\\\\\\\\\\\\\
    ////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\
    
    public function quiz()
    {
        $quiz = Quiz::all();
        
        return view('admin.quiz', ['quiz'=>$quiz]);
    }    


    
}
