<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('country' , CountryController::class);

Route::resource('/user' , UserController::class);

Route::resource('/post' , PostController::class);

