<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CustomerController;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 

    public function customerHome(){
        return view('customer.customerhome');
    }

}
