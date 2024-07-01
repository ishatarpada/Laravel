<?php

use Illuminate\Support\Facades\Route;

function getUser()
{
    return [
        1 => ['name' => 'isha', 'number' => '6354324255', 'city' => 'Rajkot'],
        2 => ['name' => 'disha', 'number' => '7359380902', 'city' => 'Rajkot'],
        3 => ['name' => 'manshi', 'number' => '6351299108', 'city' => 'Rajkot'],
        4 => ['name' => 'devu', 'number' => '895632475', 'city' => 'Rajkot']
    ];
}



Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    // $name = "isha";

    $names = getUser();

    return view('users' , [
                'user' => $names , 
                'city' => 'Delhi'
            ]);

    // return view('users' , [
    //             'user' => $name , 
    //             'city' => '<script>alert("Delhi")</script>'
    //         ]);

    // return view('users')->with('user', $name)->with('city', 'Delhi');

    // return view('users')->withUser( $name)->withCity('Delhi');

    // return view('users', [
    //     'user' => $name,
    //     'city' => ''
    // ]);

    // $info = [
    //     1 => ['name' => 'isha', 'number' => '6354324255', 'city' => 'Rajkot'],
    //     2 => ['name' => 'disha', 'number' => '7359380902', 'city' => 'Rajkot'],
    //     3 => ['name' => 'manshi', 'number' => '6351299108', 'city' => 'Rajkot'],
    //     4 => ['name' => 'devu', 'number' => '895632475', 'city' => 'Rajkot']
    // ];

    // return view('users', [
    //     'user' => $info,
    //     'city' => ''
    // ]);
});

// Route::get('/users/{id}', function ($id) {
//     return "<h1>User : " . $id . "</h1>";
// })->name('view.users');

Route::get('/users/{id}', function ($id) {
    $users = getUser();
    abort_if(!isset($users[$id]) , 404);
    $user = $users[$id];
    return view('user', ['id' => $user]);
})->name('view.users');