<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PosteController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/post', [PosteController::class, 'index']);
Route::post('/post', [PosteController::class, 'store']);
Route::get('/post/{id}', [PosteController::class, 'show']);
Route::put('/post/{id}', [PosteController::class, 'update']);
Route::delete('/post/{id}', [PosteController::class, 'destroy']);

