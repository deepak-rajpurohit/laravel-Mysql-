<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function getStudents(){
        $data = new \App\Models\student; //
        echo $data->testFun(); // in case if we want to create function inside model.php
        $students = \App\Models\student::all();
        return view('students',['data'=>$students]);;
    }
    //
}
