<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /* $users = User::get();
        return $users; */

        /* $users = User::with("phoneNumber")->get();
        return $users; */

        $users = User::with("company")->with("phoneNumber")->get();
        foreach ($users as $user) {
            echo '<div style="text-align:center; margin:10px auto;">';
            echo $user->name . "<br>";
            echo $user->company->company_name . "<br>";
            echo $user->phoneNumber->numbers . "<br>";
            echo '<hr style="width:50%; margin:auto;">';
            echo '</div>';
        }
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
