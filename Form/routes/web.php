<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [UserController::class,'showUser'])->name('home');

Route::get('/user/{id}', [UserController::class,'singleUser'])->name('view.user');

Route::post('/add', [UserController::class, 'addUser'])->name('addUser');

Route::get('/update', [UserController::class, 'updateUser'])->name('update.user');

Route::get('/delete/{id}', [UserController::class, 'deleteUser'])->name('delete.user');

Route::get('/deleteAllUser', [UserController::class, 'deleteAllUser'])->name('delete.allUser');

Route::view('newUser' , '/addUser');