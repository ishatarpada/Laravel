<?php

use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/* Route::get('/', function () {
    return view('welcome');
});
 */

/* Route::resource('users', UserController::class); */

/* Route::resource('users', UserController::class)->only('create', 'update', 'show'); */

/* Route::resource('users', UserController::class)->except('create', 'update', 'show'); */

/* Route::resource('users', UserController::class)->names([
    'create' => 'users.build',
    'show' => "users.view"
]); */

Route::resource('users', UserController::class);
Route::resource('users.comments' , CommentController::class)->shallow();
