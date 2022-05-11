<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;

class AdminController extends Controller
{

    public function echart()
    {
        return  view('admin.home');
    }
    


    public function questions()
    {
        return view('admin.quiz',  ['questions' => Question::all()]);
    }  
    
    public function answersUsers()
    {
        return view('admin.answer_user');
    }    


    
}
