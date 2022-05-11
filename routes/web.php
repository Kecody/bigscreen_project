<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;


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
Route::get('/', [FrontController::class, 'index'])->name('quiz');

Route::get('/message',[FrontController::class, 'message'])->name('message');

Route::get('/result', [FrontController::class, 'result'])->name('result');
// Route::get('/front', FrontController::class, 'index');

// Route::get('/front/{access_token}', FrontController::class, 'getAnswerer');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



/////////////////////admin
Route::prefix('admin')->group(function(){

    Route::get('/home', [AdminController::class, 'echart'])->name('stats');
    
    Route::get('/quiz', [AdminController::class, 'questions'])->name('form');

    Route::get('/answer_user', [AdminController::class, 'answersUsers'])->name('answer');

});