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


    public function graphdata()
    {
        //////////////////////\\\\\\\\\\\\\\\\\\\\
        ////////////////Chart\\\\\\\\\\\\\\\\\\\\\
        ////////////////////\\\\\\\\\\\\\\\\\\\\\\\
        







        return  view('admin.home');
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
