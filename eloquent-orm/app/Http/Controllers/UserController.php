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
        /*$users = User::all();

        $users = User::find([2 , 4], ['name' , 'email']);

        $users = User::min('age');

        $users = User::max('age');

        $users = User::sum('age');

        $users = User::where('name', 'Bennett Hill III')->get(); 

        $users = User::where('name', 'Bennett Hill III')->where('age', '>', 20)->get();

        $users = User::where([
            ['name' , 'Bennett Hill III'] ,
            ['age' , '>' , 22]
        ])->get();

        $users = User::where('name', 'Bennett Hill III')->orWhere('age', '>', 20)->get();

        $users = User::where('name', 'Bennett Hill III')->orWhere('age', '>', 20)->count();

        $users = User::whereName('Bennett Hill III')->whereAge(20)->get();

        $users = User::whereName('Bennett Hill III')->whereAge(18)->select('name', 'email as mailID')->get();

        $users = User::whereName('Bennett Hill III')->whereAge(18)->select('name', 'email as mailID')->toSql();

        $users = User::whereName('Bennett Hill III')->whereAge(18)->select('name', 'email as mailID')->toRawSql();

        $users = User::whereName('Bennett Hill III')->whereAge(18)->select('name', 'email as mailID')->dd();

        $users = User::whereName('Bennett Hill III')->whereAge(18)->select('name', 'email as mailID')->ddRawSql();

        $users = User::where('age' , '>' , 20)->first();

        $users = User::where('age' , '<>' , 20)->first();

        $users = User::whereNot('age' , '>' , 20)->first();

        $users = User::whereBetween('age' , [20,25])->get();

        $users = User::whereNotBetween('age' , [20,25])->get();

        $users = User::whereIn('age' , [39])->get();

        $users = User::selectRaw('name , age')->get();

        $users = User::whereRaw('age > 20')->get();

        $users = User::whereRaw('age >?' , [20])->get();*/

        $users = User::orderByRaw('age , name')->get();

        return $users;

        /* foreach($users as $user){
             echo $user->name . "<br><br>";
         } */

        /* return view('welcome', ['data' => $users]);
        return view('welcome', compact('users'));*/
    }
}
