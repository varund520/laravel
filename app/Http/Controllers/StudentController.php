<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\StudentModel;

class StudentController extends Controller
{
    public function index(){
        return view('add-student');
    }

    public function AddStudent(Request $request){
       
        $request->validate(
            [
                'name'             => 'required',
                'email'            => 'required|email',
                'grade'            => 'required',
                'rollno'           => 'required',
                'password'         => 'required',
                'confirmpassword'  => 'required|same:password'
            ]
        );

        $student = new StudentModel;
        $student->student_name   = $request['name'];
        $student->student_email  = $request['email'];
        $student->student_class  = $request['grade'];
        $student->student_rollno = $request['rollno'];
        $student->student_gender = $request['gender'];
        $student->student_age    = $request['age'];        
        $student->student_password  = md5($request['password']);
        $student->save();

        return redirect('/view-students');        
    }

    public function ViewStudents(){
        echo "testing"; die;

    }


}
