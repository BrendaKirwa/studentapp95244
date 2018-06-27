<?php

namespace App\Http\Controllers;

use App\student;
use Illuminate\Support\Facades\DB;

class studentController extends Controller
{
    public function home() {
        $students = student::all();
        $fee =  DB::table('fees')->sum('amount');
        return view('home' , ['students'=>$students , 'fee'=>$fee]);
     }
     public function index(){

         return view('95244.student');
    }

    public function create() {
        $student = new student();

        $student->fullName=request('fullName');
        $student->DateOfBirth=request('DateOfBirth');
        $student->address=request('address');
        $student->balance=request('balance');
        $student->save();
        return Redirect('/');

    }

    public function search(){
        $id= $_GET['id'];

        $student=student::find($id, ['id' ,'fullName','balance']);

        return view('95244.student', ['students'=>$student]);
    }
}
