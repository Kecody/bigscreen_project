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
     // $answerer=Answerer::where('access_token')->get();
        $faker = \Faker\Factory::create();
        $answerers = Answerer::all();
        $questions = Question::all();
        foreach ($answerers as $answerer) {// on parcours tous les answerers
            foreach ($questions as $question) { // on parcours toutes les questions 
                    $newAnswer = new Answer();
                        $newAnswer -> questions_id = $question->id;
                        $newAnswer -> answerers_access_token = $answerer->access_token;
                    switch ($question->type) { // on créer des réponses auto trié par type
                        case 'A':
                            $choices = json_decode($question->choices);
                            $answers = $choices[rand(0, count($choices)-1)];
                            $newAnswer -> answers = $answers;//set
                            break;
                        case 'B':
                            $randomAnswer = $faker-> sentence($nbWords = 6, $variableNbWords = true);
                            $newAnswer -> answers = $randomAnswer;//set
                            break;
                        case 'C':
                            $randomNumber = rand(1, 5);
                            $newAnswer -> answers = $randomNumber;//set
                            break;       
                        default:
                            break;
                    }        
                $newAnswer->save();
            }
        $answerer->status = true;
        $answerer->save(); 
        }        
    }
} 