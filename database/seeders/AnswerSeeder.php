<?php

namespace Database\Seeders;

use App\Models\Answer;
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
       Question::factory()->count(5)->create();
       Question::factory()->count(15)->create()->each(function($quiz) {  
            foreach ($questions as $key => $question) {
                switch ($question->type) {
                    case 'A':
                        $choices = json_decode($question->choices);
                        $description = $choices[rand(0, count($choices) -1)];
                        $newAswer = Answer::create([
                            'description' => $description,
                            'question_id' => $question->id,
                            'quiz_id'=> $quiz ->id,
                        ]);
                        break;
                    case 'B':
                        $randomAnswer = $faker-> sentence($nbWords = 6, $variableNbWords = true);
                        $newAnswer = Answer::create([
                            'description' => $randomAnswer,
                            'question_id' => $question->id,
                            'quiz_id'=> $quiz ->id,
                        ]);
                        break;
                    case 'C':
                        $randomNumber = rand(1, 5);
                        $newAnswer = Answer::create([
                            'description' => $randomNumber,
                            'question_id' => $question->id,
                            'quiz_id'=> $quiz ->id,
                        ]);
                        break;
                    default:
                        break;        
                }
                $newAnswer->save();
            } 
            
            $quiz->status = true;
            $quiz->save();
       });
    }
}
