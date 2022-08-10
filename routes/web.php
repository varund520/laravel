<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/    

    Route::get('/',function(){
        view('welcome');
    });

    Route::get('/add-student',[StudentController::class,'index']);

    Route::post('/add-student',[StudentController::class,'AddStudent']);

    Route::get('/view-students',[StudentController::class,'ViewStudents']);





