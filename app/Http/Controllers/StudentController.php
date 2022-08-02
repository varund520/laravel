<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return view('add-student');
    }

    public function AddStudent(Request $request){
        echo "<pre>";
        print_r($request->all());
        die;
    }
}
