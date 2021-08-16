<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseUser;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){
        $courses = Course::where('status', 3)->latest('id')->get()->take(12);
//        $students = Course::all();
//        $students->students()->paginate(4);
//        $students = Course::with(['students'=>function ($query) { $query->where('name', 'LIKE', '%' . 'lulu14' . '%')->first(); }])->get();
//
//        return $students;

        return view('welcome', compact('courses'));
    }
}
