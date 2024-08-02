<?php

use App\Http\Controllers\EmailController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('contact');
})->name('contact');

Route::get('send-email', [EmailController::class, 'sendEmail']);
Route::post('send-email', [EmailController::class, 'sendContactEmail'])->name('contact');
