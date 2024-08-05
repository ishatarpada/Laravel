<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function signup(Request $request)
    {
        // validate user using validator
        $validUser = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:4|max:12',
            ]
        );

        // if validation is failed then send response data
        if ($validUser->fails()) {
            return response()->json([
                'status' => false,
                'message' => "Validation Error",
                'errors' => $validUser->errors()->all()
            ], 401);
        }

        // if validation not failed then send the data to database
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        // and response the data
        return response()->json([
            'status' => true,
            'message' => "User Created Successfully",
            'user' => $user,
        ], 200);
    }

    public function login(Request $request)
    {
        // fetch the data and validate the data
        $validUser = Validator::make(
            $request->all(),
            [
                'email' => 'required|email',
                'password' => 'required',
            ]
        );

        if ($validUser->fails()) {
            return response()->json([
                'status' => false,
                'message' => "Authentication fails",
                'errors' => $validUser->errors()->all()
            ], 404);
        }


        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $authUser = Auth::user();
            return response()->json([
                'status' => true,
                'message' => "User Logged In Successfully",
                'token' => $authUser->createToken("API Token")->plainTextToken,
                'token_type' => 'bearer'
            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'message' => "Email & Password does not Matched",
            ], 401);
        }
    }

    public function logout(Request $request)
    {
        $user = $request->user();
        $user->tokens()->delete();


        return response()->json([
            'status' => true,
            'user' => $user,
            'message' => "User Logged Out Successfully",
        ], 200);
    }
}