<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function showStudent()
    {
        // $students = DB::table('students')
        //                 // ->select('students.*' , 'cities.city_name')
        //                 ->join('cities' , 'students.city' , '=' , 'cities.id')
        //                 // ->join('fees')
        //                 ->select(DB::raw('count(*) as student_count') , 'cities.city_name')
        //                 ->groupBy('city_name')
        //                 // ->having('cities.city_name' , "=" , "Mumbai")
        //                 // ->having('student_count' , '>' , 1)
        //                 ->havingBetween('student_count' , [1,3])
        //                 ->get();



        // $students = DB::table('students')
        //                 ->leftJoin('cities' , 'students.city' , '=' , 'cities.id')
        //                 ->get();



        // $students = DB::table('students')
        //                 ->rightJoin('cities' , 'students.city' , '=' , 'cities.id')
        //                 ->get();



        $students = DB::table('students')
            ->leftJoin('cities', function (JoinClause $join) {
                $join->on('students.city', '=', 'cities.id')
                    ->where('students.name', 'like', 'i%');
            })
            ->select('students.*' , 'cities.city_name')
            ->get();

        // return $students;
        return view('home', compact('students'));
    }
}
