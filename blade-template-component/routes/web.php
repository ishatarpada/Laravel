<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::resource('user', UserController::class);

Route::get('/', [UserController::class, 'showGallery'])->name('gallery');

Route::get('/change-image', [UserController::class, 'showChangeImage'])->name('changeImage');