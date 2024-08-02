<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

// Route to display the login view
Route::get('/', function () {
    return view('login');
})->name('login');

// Handle login form submission
Route::post('loginDetail', [UserController::class, 'login'])->name('loginDetail');

// Route to display the registration view
Route::view('register', 'register')->name('register');

// Handle registration form submission
Route::post('registerSave', [UserController::class, 'register'])->name('registerSave');

// Authenticated user routes (grouped together for better organization)

// Route to display the user dashboard
Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');

// Route to display user photo
Route::get('dashboard/photo', [UserController::class, 'photo'])->name('photo');

// Route to handle user logout
Route::get('logout', [UserController::class, 'logout'])->name('logout');


// Routes for posts (public or authenticated, adjust middleware as needed)
Route::prefix('posts')->group(function () {
    // Route to display the post creation view
    Route::view('create', 'post')->name('post');

    // Handle post form submission
    Route::post('save', [PostController::class, 'postSave'])->name('postSave');
});

// Route to show a single post
Route::get('posts/show/{id}', [PostController::class, 'show'])->name('postShow');

// Route to show the form for editing a post
Route::get('/post/edit/{id}', [PostController::class, 'edit'])->name('editPost');

// Route to update the post (using PUT method)
Route::put('/single-post/{id}', [PostController::class, 'updatePost'])->name('updatePost');


// delete post
Route::delete('/post/{id}', [PostController::class, 'deletePost'])->name('postDelete');



// Route for profile

Route::get("/profile/{id}", [UserController::class, 'ViewProfile'])->name('profile.show');

// Admin route (if needed for other purposes, consider adding middleware for admin access)
Route::get('admin', function () {
    return view('admin');
})->name('admin');