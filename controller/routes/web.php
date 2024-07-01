<?php

use App\Http\Controllers\TestingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

Route::controller(UserController::class)->group(function () {
    Route::get('/', 'showHome')->name('home');
    Route::get('/blog', 'showBlog')->name('blog');
    Route::get('/users/{id}', 'showUser')->name('users');
});


Route::get('/test' , TestingController::class);