<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /* Display a listing of the resource. */
    public function index()
    {
        /* $users = User::find(2);
       return $user->roles; */

        /* $users = User::find(4);
        foreach($user->roles as $role){
            echo $role->role_name . "<br>";
        } */

        $users = User::get();
        foreach ($users as $user) {
            echo $user->name . "<br>";
            echo $user->email . "<br>";
            foreach ($user->roles as $role) {
                echo $role->role_name . "<br>";
            }
            echo "<hr>";
        }
    }

    /* Show the form for creating a new resource. */
    public function create()
    {
        /* $user = User::find(5);
        $user->roles()->attach(8); */

        /* $user = User::find(4);
        $roles = [5 , 8];
        $user->roles()->attach($roles); */

        /* $user = User::find(4);
        $user->roles()->detach(8); */

        /*$user = User::find(6);
        $roles = [5 , 8];
        $user->roles()->sync($roles); */

        /* $user = User::find(6);
        $roles = [5];
        $user->roles()->sync($roles); */
    }

    /* Store a newly created resource in storage. */
    public function store(Request $request)
    {
        //
    }

    /* Display the specified resource. */
    public function show(string $id)
    {
        //
    }

    /* Show the form for editing the specified resource. */
    public function edit(string $id)
    {
        //
    }

    /* Update the specified resource in storage. */
    public function update(Request $request, string $id)
    {
        //
    }

    /* Remove the specified resource from storage. */
    public function destroy(string $id)
    {
        //
    }
}
