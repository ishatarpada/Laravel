<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [UserController::class,'showGallery']);


Route::resource('user' , UserController::class);

Route::get('/gallery', [UserController::class, 'showGallery'])->name('gallery');

Route::get('/change-image', [UserController::class, 'showChangeImage'])->name('changeImage');