<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Answerer;
use App\Models\Question;
use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
    //     $answerer=Answerer::where('access_token')->get();
=======
        // $answerer=Answerer::where('access_token')->get();
>>>>>>> seeder_answer
    //     $answerers = Answerer::all();
    //     $questions = Question::all();
    //     foreach ($answerers as $answerer) {
    //        foreach ($questions as $question) {
    //             switch ($question->type) {
    //                 case 'A':
    //                     $choices = json_decode($question->choices);
    //                     $description = $choices[rand(0, count($choices) -1)];
    //                     $newAnswer = Answer::create([
    //                         'description' => $description,
    //                         'question_id' => $question->id,
<<<<<<< HEAD
    //                         'access_token'=> $answerer ->acces_token,
=======
    //                         'access_token'=> $answerer->acces_token,
>>>>>>> seeder_answer
    //                     ]);
    //                     break;
    //                 case 'B':
    //                     $randomAnswer = $faker-> sentence($nbWords = 6, $variableNbWords = true);
    //                     $newAnswer = Answer::create([
    //                         'description' => $randomAnswer,
    //                         'question_id' => $question->id,
<<<<<<< HEAD
    //                         'access_token'=> $answerer ->acces_token,
=======
    //                         'access_token'=> $answerer->acces_token,
>>>>>>> seeder_answer
    //                     ]);
    //                     break;
    //                 case 'C':
    //                     $randomNumber = rand(1, 5);
    //                     $newAnswer = Answer::create([
    //                         'description' => $randomNumber,
    //                         'question_id' => $question->id,
<<<<<<< HEAD
    //                         'access_token'=> $answerer ->acces_token,
=======
    //                         'access_token'=> $answerer->acces_token,
>>>>>>> seeder_answer
    //                     ]);
    //                     break;
    //                 default:
    //                     break;        
    //             }
    //             $newAnswer->save();
    //         }   
    //     }
<<<<<<< HEAD
    // $a->status = true;
    // $quiz->save();
=======
    // $answerer->status = true;
    // $answerer->save();
>>>>>>> seeder_answer
    }
} 