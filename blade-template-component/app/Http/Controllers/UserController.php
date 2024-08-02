<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function showGallery()
    {
        $users = DB::table('users')->get();

        return view('gallery', ['data' => $users]);
    }

    public function showChangeImage()
    {
        $users = DB::table('users')->get();

        return view('change-image', ['users' => $users]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::get();
        return view("profile", compact('users'));
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
        /* METHOD = 5 */
        $file = $request->file('photo');
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $path = $request->file('photo')->store('image', 'public');

        User::create([
            'file_name' => $path,
        ]);

        return redirect()->route('gallery')->with('status', "User Image uploaded Successfully");
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
        $user = User::find($id);
        return view("file-update", compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request);

        $user = User::find($id);

        if ($request->hasFile('photo')) {

            $image_path = public_path("storage/") . $user->file_name;

            if (file_exists($image_path)) {
                @unlink($image_path);
            }

            $path = $request->file('photo')->store('image', 'public');

            $user->file_name = $path;
            $user->save();

            return redirect()->route('gallery')->with('status', "User Image Data Updated Successfully");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();
        $image_path = public_path("storage/") . $user->file_name;

        if (file_exists($image_path)) {
            @unlink($image_path);
        }

        return redirect()->route('gallery')->with('status', "User Image Data Deleted Successfully");
    }
}