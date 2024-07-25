<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /* Display a listing of the resource. */
    public function index()
    {
        /* $test = Test::find(1);
        return $test->meta_data; */

        /*  $test = Test::get();
        return $test; */

        /* $test = Test::get();
        return view('data' , compact('test')); */

        /* $test = Test::orderBy('meta_data->name')->get();
        return $test; */

        /* $test = Test::find(3);
        return $test->meta_data['address']; */

        /* $test = Test::where('meta_data->name' , 'isha')->get();
        return $test; */

        /* $test = Test::where('meta_data->name' , 'LIKE' , 'd%')->get();
        return $test; */

        /* $test = Test::whereJsonContains('meta_data->name' , 'isha')->get();
        return $test; */

        /* $test = Test::whereJsonLength('meta_data->name' , 0)->get();
        return $test; */

        /* $test = Test::whereJsonLength('meta_data->name' , 1)->get();
        return $test; */
    }

    /* Show the form for creating a new resource. */
    public function create()
    {
        /*  $test = new Test;

        $test->meta_data=[
            'name' => 'isha',
            'email' => 'isha@gmail.com',
            'phoneNumber' => '1122334455'
        ];
        $test->save(); */

        /* $test = Test::create([
            'meta_data'=>[
                'name' => 'disha',
            'email' => 'disha@gmail.com',
            'phoneNumber' => '6677889900'
            ]
        ]); */

        /* $test = Test::create([
            'meta_data' => [
                'name' => 'manshi',
                'email' => 'manshi@gmail.com',
                'phoneNumber' => '6677456200',
                'address' => [
                    'street' => '#123 KK Road',
                    'city' => 'Mumbai',
                    'country' => 'India'
                ]
            ]
        ]); */

        /* $test = Test::where('id' , 4)->update([
            'meta_data->name' => "harshi"
        ]); */

        /*  $test = Test::find(4);
        $test->meta_data['email']='harshi@gmail.com';
        $test->save(); */

        /* $test = Test::where('id', 4)->update([
            'meta_data->address->city' => "Delhi"
        ]); */

        /* $test = Test::find(5);
        $test->meta_data = collect($test->meta_data)->forget('email');
        $test->save(); */
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
      
    }
}
