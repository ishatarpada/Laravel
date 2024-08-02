<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route to display the login view
Route::get('/', function () {
    return view('login');
})->name('login');


Route::post('loginDetail', [UserController::class, 'login'])->name('loginDetail');

// Route to display the registration view
Route::view('register', 'register')->name('register');

// Route to handle registration form submission
Route::post('registerSave', [UserController::class, 'register'])->name('registerSave');



Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');


Route::get('dashboard/photo', [UserController::class, 'photo'])->name('photo');



Route::get('logout', [UserController::class, 'logout'])->name('logout');
