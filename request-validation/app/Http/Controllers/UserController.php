<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function addUser(UserRequest $req){
        // $req->validate([
        //     'name' => 'required',
        //     'city' => 'required',
        //     'age' => 'required|numeric|min:18',
        //     'email' => 'required|email',
        //     'password' => 'required|alpha_num|min:6'
        // ]);

        // return $req->all();
        // return $req->only(['name' , 'city']);
        // return $req->except(['password' , 'city']);
    }


    
}
