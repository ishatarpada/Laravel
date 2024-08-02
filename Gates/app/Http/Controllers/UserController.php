<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->validate([
            "name" => "required|",
            "email" => "required|email|unique:users,email",
            "age" => "required|numeric",
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

        /* Gate::authorize('isAdmin');
        return view('admin');*/

        /* if (Gate::allows('isAdmin')) {
            return view('admin');
        } else {
            return view('dashboard');
        } */

        return view('dashboard');
    }

    public function photo()
    {
        if (Auth::check()) {
            return view('photo');
        } else {
            return redirect()->route('login');
        }
    }

    public function ViewProfile(int $id)
    {
        /*  if (Gate::allows('viewProfile', $id)) {
            $user = User::findorfail($id);
            return view('profile', compact('user'));
        } else {
            abort(403);
        } */

        Gate::authorize('viewProfile', $id);
        $user = User::findorfail($id);
        return view('profile', compact('user'));
    }

    public function logout()
    {
        Auth::logout();
        return view('login');
    }
}