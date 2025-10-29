<?php

use App\Http\Controllers\PosteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post',[PosteController::class,'index']);
Route::get('/post',[PosteController::class,'store']);
Route::get('/post/{id}',[PosteController::class,'show']);
Route::get('/post/{id}',[PosteController::class,'update']);
Route::get('/post/{id}',[PosteController::class,'destroy']);

Route::get('/register',[UserController::class,'showForm']);
Route::post('/register/submit',[UserController::class,'handleForm'])->name('handleForm');
