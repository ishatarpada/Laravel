<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session as SessionSession;
use session;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {

        $value = session("name",);
        return view("welcome", compact("value"));

        /* $value = session()->all();
        echo "<pre>";
        print_r($value);
        echo "</pre>"; */

        /* $value = session()->except(["class"]);
        echo "<pre>";
        print_r($value);
        echo "</pre>"; */

        /* $value = session()->only(["id", "name", "class", "_previous"]);
        echo "<pre>";
        print_r($value);
        echo "</pre>"; */

        /* if (session()->has("name")) {
            $value = session()->get('name');
        } else {
            echo "Name key doesn't exists";
        } */

        /* if (session()->exists("name")) {
            $value = session()->get('name');
        } else {
            echo "Name key doesn't exists";
        } */


        // $value = session()->get('name');
        /* $value = session('name', "Hello");
        echo $value; */
    }

    public function storeSession(Request $request)
    {
        /* session(['name' => 'isha']);
        $request->session()->put("class", "BE"); */

        session([
            'id' => 1,
            'name' => "isha",
            'class' => 'BE'
        ]);

        /*   session()->increment("count");
        session()->increment("count", $incrementBy = 2); */

        /* session()->decrement("count");
        session()->decrement("count", $decrementBy = 2); */

        // session()->regenerate();

        session()->flash("status", "session saved successfully.");

        return redirect("/");
    }


    public function deleteSession()
    {
        // session()->forget(["name", "class"]);

        // session()->flush();

        session()->invalidate();

        return redirect("/");
    }
}