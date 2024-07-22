<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('student' , StudentController::class);

Route::get('/contact' , [ContactsController::class , 'show']);