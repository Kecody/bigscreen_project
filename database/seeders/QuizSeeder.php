<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {//query_builder
       DB::table('quiz')->insert([
           'title'=>'Bigscreen',
           'description'=>'Sondage casque de réalité virtuel',
           'url'=> Str::random(40),
           'status'=>true
       ]);
    }
}
// DB::table('quiz')->insert([
//     'name' =>'Bigscreen'
// ]);