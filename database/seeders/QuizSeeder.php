<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('quiz')->insert([
           'id'=>'questions_id',
       ]);
    }
}
