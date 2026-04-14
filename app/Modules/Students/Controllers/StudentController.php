<?php

namespace App\Modules\Students\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        // Fetch students ordered by student number
        $students = Student::orderBy('student_no')->get();
        
        // Return the existing view
        return view('students.index', compact('students'));
    }
}