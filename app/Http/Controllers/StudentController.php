<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public  function show(){

        $students = Student::all();
        return view('welcome',['students' => $students]);
    }
}
