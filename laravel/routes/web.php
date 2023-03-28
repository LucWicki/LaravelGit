<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\EventController;
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
Route::get('/', [EventController::class, 'list']);
Route::get('/event/{id}', [EventController::class, 'show']);
Route::post('/event/{id}', [ApplicationController::class, 'create']);
Route::get('event/{id}/applications', [ApplicationController::class, 'list']);

Route::get('/register', function(){
    return view('register');
})->middleware('guest');

Route::get('/login', function (){
    return view('login');
})->middleware('guest');

Route::post('/register', [UserController::class, 'create'])->middleware('guest');
Route::post('/login', [UserController::class, 'login'])->middleware('guest');

Route::get('/logout', [UserController::class, 'logout']);

Route::get('/eventcreator', [EventController::class,'viewing']);
Route::post('/eventcreator', [EventController::class, 'createevent']);
