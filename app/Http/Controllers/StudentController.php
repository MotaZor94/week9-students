<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student;

class StudentController extends Controller
{
    //
    public function show($student_slug)
    {
        $student = \App\Student::where('slug', $student_slug)->first();

        if (!$student) {
            abort(404, 'Student not found');
        }

        $view = view('student/show');
        $view->student = $student;
        return $view;
    }

    public function index()
    {
        $all_students = Student::orderBy('name','asc')->get();

        $view = view('student/index',compact('all_students'));

        return $view;

    }
}
