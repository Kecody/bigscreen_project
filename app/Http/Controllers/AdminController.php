<?php

namespace App\Http\Controllers;

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
