<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Rules\Uppercase;
use Closure;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    // Custom Validation using Object Method
    /*public function addUser(Request $req)
    {
        $validate = $req->validate([
            'name' => ['required', new Uppercase],
            'email' => 'required|email',
        ]);

        return $req->all();
    }*/

    // Custom Validation - Closure Method
    public function addUser(Request $req)
    {
        $validate = $req->validate([
            'name' => ['required', function (string $attribute, mixed $value, Closure $fail) {
                if (strtoupper($value) !== $value) {
                    $fail('The :attribute must be uppercase.');
                }
            }],
            'email' => 'required|email',
        ]);

        /* return $req->all(); */
        // dd($validate);

        echo $validate['name'];
    }
}
