<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{

  public function showStudent()
  {
    $students = DB::table('students')
      ->join('cities', 'students.city', '=', 'cities.id')
      ->select('students.*', 'cities.city_name')
      ->get();


    // return $students;
    return view('home', compact('students'));
  }


  public function uniondata()
  {
    $lectures = DB::table('lectures')
      // ->select('name' , 'email' , 'city_name')
      ->join('cities', 'lectures.city', '=', 'cities.id');
    // ->where('city_name' , '=' , 'mumbai');

    $students = DB::table('students')
      ->union($lectures)
      ->join('cities', 'students.city', '=', 'cities.id')
      // ->select('name' , 'email' , 'city_name')
      // ->where('city_name' , '=' , 'delhi')
      ->get();
    // ->toSql();

    // return $students;
    return view('uniondata', compact('students'));
  }

  public function whendata()
  {

    $test = false;

    $students = DB::table('students')
      ->when($test, function ($query) {
        $query->where('age', '>', 20);
      }, function ($query) {
        $query->where('age', '<', 20);
      })
      ->get();

    // return $students;
    return view('whendata', compact('students'));
  }

  public function chunkdata()
  {

    $employees = DB::table('employees')->orderBy('id')
      ->chunkById(3, function ($employees) {
        // echo "<div style='border:1px solid blue; margin-bottom:15px'>";
        // foreach($employees as $employee){
        //   echo $employee->first_name . "<br>";
        // }
        // echo "</div>";
        foreach ($employees as $employee) {
          DB::table('employees')->where('id',$employee->id)->update(['salary' => true]);
        }
      });

    // return $employees;
    // return view('chunkdata', compact('employees'));
  }
}
