<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Student2Controller;

// Route::get('/', function () {
//     return view('welcome');
// });

//L'objectif d'une route est mapper un  URI ou URL avec une action (controller)
//Ci dessous c'est la bonne maniere en couche
Route::get('/student/create', [StudentController::class, 'create']) ;

Route::post('/students', [StudentController::class, 'store'] )-> name('students.store');

Route::get('/students', [StudentController::class, 'index'] )-> name('students.index');

Route::resource("users", UserController::class);

Route::resource("students2", Student2Controller::class);

// Route::post('/students', function(Request $request){
//     dd($request->all());
// });

// Route::get('/multiplication', function(Request $request){
//     return view('multiplication');
// });

