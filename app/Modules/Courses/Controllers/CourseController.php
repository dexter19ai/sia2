<?php

namespace App\Modules\Courses\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Course; 
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        // Fetch courses ordered by course code
        $courses = Course::orderBy('course_code')->get();
        
        // Ensure the view 'courses.index' exists in resources\views\courses\index.blade.php
        return view('courses.index', compact('courses'));
    }
}
