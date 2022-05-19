<?php

namespace App\Http\Controllers;


use App\Models\Quiz;
use App\Models\Answer;
use App\Models\Answerer;
use App\Models\Question;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\FrontController;

class FrontController extends Controller
{

    /// Affichage des questions dans le formulaire
    public function quiz()
    {
    //     $quiz = Quiz::all();
         

    //     if(count($quiz)<1){
    //         echo "ceci n'est pas un quiz";      
    //    } else {
    //        $quiz -> question();
    //    }

        // if ($quiz) {
        //     return view('front.quizForm', ['questions' => $quiz->questions]);
        // }
        //     return view('front.quizForm', ['questions' => []]);
        // return view('front.quizForm', ['questions' => Quiz::where('url')->first()]);
        return view('front.quizForm', ['questions' => Question::all()]);
    }
    public function message()
    {
        return view('front.quizUrl', ['questions' => Question::all()]);
    }  
    
    public function result()
    {
        return view('front.quizResult', ['questions' => Question::all()]);
    }    
}
