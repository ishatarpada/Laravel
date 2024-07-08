<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function addUser(Request $req)
    {
        $user = DB::table('users')->insert(
            [
                'name' => $req->name,
                'age' => $req->age,
                'city' => $req->city,
                'password' => $req->password,
                'email' => $req->email
            ]
        );

        if ($user) {
            echo "<h1>Data Successfully insert. </h1>";
            return redirect()->route('home');
        } else {
            echo "<h1>Data not insert. </h1>";
        }
    }

    public function showUser()
    {
        $users = DB::table('users')->get();
        return view('allusers', ['data' => $users]);
    }

    public function updateUser()
    {
        $users = DB::table('users')->get();
        return view('allusers', ['data' => $users]);
    }

    public function deleteUser(string $id)
    {
        $user = DB::table('users')->where('id', $id)->delete();

        if ($user) {
            echo "<h1>Data Successfully Delete. </h1>";
            return redirect()->route('home');
        } else {
            echo "<h1>Data not Delete. </h1>";
        }
    }

    public function deleteAllUser()
    {
        // $user = DB::table('users')->delete();
        $user = DB::table('users')->truncate();

        if ($user) {
            echo "<h1>All Data Successfully Delete. </h1>";
            return redirect()->route('home');
        } else {
            echo "<h1>Data not Delete. </h1>";
        }
    }

    public function singleUser(string $id)
    {
        $users = DB::table('users')->where('id', $id)->get();
        return view('user', ['data' => $users]);
    }
}
