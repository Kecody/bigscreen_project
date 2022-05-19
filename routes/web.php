<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\CustomerController;


///default route
Route::get('/', function () {
    return view('welcome');
});


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/////////////////front routes
Route::get('/quiz', [FrontController::class, 'quiz'])->name('quiz');

Route::post('/message',[FrontController::class, 'message'])->name('message');

Route::get('/result', [FrontController::class, 'result'])->name('result');
// Route::get('/front', FrontController::class, 'index');

// Route::get('/front/{access_token}', FrontController::class, 'getAnswerer');



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


/////////////////////admin
Route::prefix('admin')->group(function(){

    Route::get('/', [AdminController::class, 'logged'])->name('admin');
    
    Route::get('/home', [AdminController::class, 'graphdata'])->name('stats');
    
    Route::get('/quiz', [AdminController::class, 'quiz'])->name('forms');
    
    Route::get('/questions', [AdminController::class, 'questions'])->name('form');

    Route::get('/answer_user', [AdminController::class, 'answersUsers'])->name('answer');

});


/////customer

// Route::get('customer/customerhome', [CustomerController::class, 'customerHome'])->name('home');