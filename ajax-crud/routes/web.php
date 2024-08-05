<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::view('posts', 'posts');
Route::view('addPost', 'addPost');