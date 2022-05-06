<?php

namespace App\Http\Controllers;


use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\Question;
use App\Models\Answerer;
use App\Models\Answer;

class FrontController extends Controller
{

    /// Affichage des questions dans le formulaire
    public function index()
    {
        $questions = Question::with('answers')->get();
        $questionsAnswered = [];
        foreach ($questions as $question) {
            if ($questions->type === 'A') {
                $JSONitem = [
                    'id' => $question->id,
                    'description' => $question->description,
                    'type' => $question->type,
                    'choices' => json_decode($question->choices),
                ];
            } else {
                $JSONitem = [
                    'id' => $question->id,
            'description' => $question->description,
                    'type' => $question->type,
                ];
            }
            array_push($questionsAnswered, $JSONItem);
        }
        return view('front.quizForm', ['questions' => $questionsAnswered]);
    }
    
    /// Récupération des questions et des réponse du répondant
    public function getAnswerer(String $accesstoken)
    {
        $answerer = Answerer::where([['access_token', $accesstoken]])->first();

        if ($answerer == null) {
                abort(404);
        } else {
            $answererResult = [];
            $answers = $answerer->answers()->with('question')->orderBy('question_id')->get();
            $answers = [
                'description' => $answer->description,
                'question' => [
                    'description' => $answer->question->description
                ]
            ];
            array_push($answererResult, $answers);
        }
        return view('front.quizResult', ['answerer' => [
            'created_at' => $answerer->created_at,
            'email' => $answerer->email,
            'answers'=> $answererResult
        ]]);
    }
}
