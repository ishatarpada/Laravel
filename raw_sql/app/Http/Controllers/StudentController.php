<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
   public function showData()
   {
      $students = DB::table('students')->get();

      //  $students = DB::select('select * from students');

      // $students = DB::select('select * from students where name = ?' , ['Henderson Gibson']);

      // $students = DB::select('select * from students where name like ? = ?', ['h%']);

      // $students = DB::select('select * from students where age > ? AND name like ?', [20, 'h%']);

      // $students = DB::insert(
      //    'insert into students(name, email, phone, city, age) values(?, ?, ?, ?, ?)',
      //    ["Ram Kumar", "Ram@gmail.com", 6354399108, "Rajkot", 25]
      // );

      // $students = DB::update(
      //    "update  students set city = 'Ahmadabad' where id = ?" , [1]);

      // $students = DB::update(
      //    "delete from students where id = ?" ,
      //    [5]
      // );

      // $students = DB::statement("drop table students");

      // $students = DB::unprepared("delete from students where id = 5");

      // $students = DB::unprepared("update  students set city = 'Ahmadabad' where id = 2");


      //  foreach($students as $student){
      //    echo $student->name;
      //  }

      $students = DB::table("students")
         //  ->selectRaw('count(*) as student_count , age ')
         // ->whereRaw('age > ? and name like ?' , [20 , 'r%'])      
         // ->orderByRaw('age , name DESC')  
         ->select(DB::raw('count(*) as student_count , age'))
         // ->groupBy('age') 
         // ->groupByRaw('age , city')
         ->havingRaw('age < ?', [20])
         // ->get();
         ->toSql();




      return $students;

      // return view('home', compact('students'));
   }
}
