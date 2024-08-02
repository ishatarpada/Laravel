<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\TestUser;
use App\Http\Middleware\ValidUser;
use Illuminate\Support\Facades\Route;

// Route to display the login view
Route::get('/', function () {
    return view('login');
})->name('login');


Route::get('/user', function () {
    return view('user');
})->name('user');


Route::post('loginDetail', [UserController::class, 'login'])->name('loginDetail');

// Route to display the registration view
Route::view('register', 'register')->name('register');

// Route to handle registration form submission
Route::post('registerSave', [UserController::class, 'register'])->name('registerSave');

Route::get('logout', [UserController::class, 'logout'])->name('logout');

Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');


Route::get('dashboard/photo', [UserController::class, 'photo'])->name('photo');

/* Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard')->middleware(["auth", "isUserValid:admin"]);


Route::get('dashboard/photo', [UserController::class, 'photo'])->name('photo')->middleware(["auth", "isUserValid:admin"]);
 */

/* Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard')->middleware('isUserValid:admin', TestUser::class);


Route::get('dashboard/photo', [UserController::class, 'photo'])->name('photo')->middleware('isUserValid:admin', TestUser::class); */


/* Route::middleware([ValidUser::class, TestUser::class])->group(function () {
    Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');

    Route::get('dashboard/photo', [UserController::class, 'photo'])->name('photo')->withoutMiddleware([TestUser::class]);
}); */


/* Route::middleware([ValidUser::class, TestUser::class])->group(function () {
    Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');

    Route::get('dashboard/photo', [UserController::class, 'photo'])->name('photo');
}); */


/* Route::middleware(['ok-user'])->group(function () {
    Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');

    Route::get('dashboard/photo', [UserController::class, 'photo'])->name('photo');
}); */


/* Route::withoutMiddleware([TestUser::class])->group(function () {
    Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');

    Route::get('dashboard/photo', [UserController::class, 'photo'])->name('photo');
});
 */