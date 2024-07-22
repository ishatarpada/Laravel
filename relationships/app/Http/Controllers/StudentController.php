<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /* Display a listing of the resource.*/
    public function index()
    {
        // $students = Student::with('contact')->get();
        // return $students;

        // $students = Student::with('contact')->find(3);
        // echo $students->name . "<br>";
        // echo $students->contact->email . "<br>";

        // $students = Student::with('contact')->where('gender' , 'female')->get();
        // return $students;

        // $students = Student::with('contact')->withWhereHas('contact', function ($query) {
        //     $query->where('city', 'Delhi');
        // })->get();
        // return $students;

        // $students = Student::where('gender' , 'female')->withWhereHas('contact', function ($query) {
        //     $query->where('city', 'Delhi');
        // })->get();
        // return $students;

        $students = Student::where('gender', 'female')->whereHas('contact', function ($query) {
            $query->where('city', 'Delhi');
        })->get();
        return $students;
    }

    /* Show the form for creating a new resource. */
    public function create()
    {
        $student = Student::create([
            'name' => 'John Abraham',
            'age' => 18,
            'gender' => 'male'
        ]);

        $student->contact()->create([
            'email' => 'john@gmail.com',
            'phone' => '9988776655',
            'address' => '#456 JA Road',
            'city' => 'Mumbai'
        ]);
    }

    /* Store a newly created resource in storage */
    public function store(Request $request)
    {
        //
    }

    /* Display the specified resource */
    public function show(string $id)
    {
        //
    }

    /* Show the form for editing the specified resource */
    public function edit(string $id)
    {
        //
    }

    /* Update the specified resource in storage */
    public function update(Request $request, string $id)
    {
        //
    }

    /* Remove the specified resource from storage */
    public function destroy(string $id)
    {
        //
    }
}
