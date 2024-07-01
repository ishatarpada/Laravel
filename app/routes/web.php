<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('aboutUS');

Route::get('/post', function () {
    return view('post');
})->name('myPost');

Route::get('/test', function () {
    return view('contact');
});

Route::redirect('/contact' , '/test' , 301);

// group Route

Route::prefix('page')->group(function(){
    
    Route::get('/gallery', function () {
        return view('gallery');
    });
    
    Route::get('/company', function () {
        return view('company');
    });
    
    Route::get('/carrer', function () {
        return view('carrer');
    });
});


// fallback 

Route::fallback(function(){
    return "<h1>Page not Found</h1>";
});



// Route::get('/post', function () {
//     return view('post');
//     return "<h1>Our Post page</h1>";
// });

// Route::view('/post', 'post' ) ;

// Route::get('/hello', function () {
//     return view('post');
// });


// Route::view('/firstPost' , 'firstPost');

// Route::get('/post/{id?}/comment/{commentID?}', function (string $id = null, string $comment = null) {
//     if ($id) {
//         return "<h1>Post ID : " . $id . "</h1><h2>" . $comment . "</h2>";
//     } else {
//         return "<h1>No ID Found</h1>";
//     }
// });

// Route::get('/post/{id}/comment/{commentID}', function (string $id = null, string $commentID = null) {
//     if ($id) {
//         return "<h1>Post ID: " . $id . "</h1><h2>Comment ID: " . $commentID . "</h2>";
//     } else {
//         return "<h1>No ID Found</h1>";
//     }
// })->where('id', '[0-1]+')->whereAlpha('commentID' , '[a-zA-z]+');


// where('id', '[a-zA-Z]+');
// ->where('id' , '[a-zA-Z0-9]+');
// ->where('id' , '[0-9]+');
// whereNumber('id' , ['movie' , 'song']);
// whereNumber('id');
