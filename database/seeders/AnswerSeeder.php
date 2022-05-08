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
//         // $answerer=Answerer::where('access_token')->get();
        $faker = \Faker\Factory::create();
        $answerers = Answerer::all();
        $questions = Question::all();
        foreach ($answerers as $answerer) {// on parcours tous les answerers
            $answererstatus = $answerer->status;
            if($answererstatus = false){
            foreach ($questions as $question) {// on parcours toutes les questions 
                    switch ($question->type) { // on créer des réponses auto trié par type
                        case 'A':
                            $choices = json_decode($question->choices);
                            $answers = $choices[rand(0, count($choices)-1)];
                            $newAnswer = Answer::create([
                                'answers' => $answers,
                                'questions_id' => $question->id,
                                // 'answerers_access_token'=> $answerer ->access_token,
                            ]);
                            break;
                        case 'B':
                            $randomAnswer = $faker-> sentence($nbWords = 6, $variableNbWords = true);
                            $newAnswer = Answer::create([
                                'answers' => $randomAnswer,
                                'questions_id' => $question->id,
                                // 'answerers_access_token'=> $answerer ->access_token,
                            ]);
                            break;
                        case 'C':
                            $randomNumber = rand(1, 5);
                            $newAnswer = Answer::create([
                                'answers' => $randomNumber,
                                'questions_id' => $question->id,
                                // 'answerers_access_token'=> $answerer ->access_token,
                            ]);
                            break;       
                        default:
                            break;
                    }
                }        
                $newAnswer->save();
            }
        // $answerersaccesstoken = Answerer::insert('access_token')->where('answerers_access_token');           
        // $answereraccesstoken = Answer::insert(['answerers_access_token'=> $answerer->acces_token]);             
        }
        // $newAnswersAll = $this->newAnswer->all();
        // $answersAnswerer = $this->answerers->aa;
        // $answersAnswerer->save();  
        // $answerer->status = true;
    }
} 