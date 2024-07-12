<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function addUser(Request $req){
        $req->validate([
            'name' => 'required',
            'city' => 'required',
            'age' => 'required|numeric|min:18',
            'email' => 'required|email',
            'password' => 'required|alpha_num|min:6'
        ]);

        return $req->all();
    }
}
