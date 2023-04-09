<?php

use App\Http\Controllers\AssimentTwoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index',[AssimentTwoController::class,'index']);

Route::get('/chart',[AssimentTwoController::class,'chart']);

Route::get('/view404',[AssimentTwoController::class,'view404']);

Route::get('/view404',[AssimentTwoController::class,'blank']);

Route::get('/buttons',[AssimentTwoController::class,'buttons']);

Route::get('/element',[AssimentTwoController::class,'element']);

Route::get('/form',[AssimentTwoController::class,'form']);

Route::get('/singin',[AssimentTwoController::class,'singin']);

Route::get('/singup',[AssimentTwoController::class,'singup']);

Route::get('/table',[AssimentTwoController::class,'table']);

Route::get('/typography',[AssimentTwoController::class,'typography']);

Route::get('/widget',[AssimentTwoController::class,'widget']);

