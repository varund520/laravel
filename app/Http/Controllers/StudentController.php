<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return view('add-student');
    }

    public function AddStudent(Request $request){
        $request->validate(
            [
                'name'   => 'required',
                'email'  => 'required|email',
                'grade'  => 'required',
                'rollno' => 'required',

            ]

        );
        
        echo "<pre>";
        print_r($request->all());
        die;
    }
}
