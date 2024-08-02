<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->validate([
            "name" => "required|",
            "email" => "required|email|unique:users,email",
            "password" => "required|confirmed",
        ]);

        $user = User::create($data);

        if ($user) {
            return redirect()->route('login');
        }
    }


    public function login(Request $request)
    {
        // Validate the request
        $credentials = $request->validate([
            'name' => "required|",
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to authenticate the user
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }
    }

    public function dashboard()
    {
        return view('dashboard');

        // if (Auth::check()) {
        //     return view('dashboard');
        // } else {
        //     return redirect()->route('login');
        // }
    }

    public function photo()
    {
        return view('photo');

        // if (Auth::check()) {
        //     return view('photo');
        // } else {
        //     return redirect()->route('login');
        // }
    }

    public function logout()
    {
        Auth::logout();
        return view('login');
    }
}
