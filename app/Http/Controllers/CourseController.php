<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use App\Models\Course;
use App\Models\CourseUser;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        return view('courses.index');
    }

    public function show(Course $course){

        $this->authorize('published', $course);

        $similares = Course::where('category_id', $course->category_id)
            ->where('id', '!=', $course->id)
            ->where('status', 3)
            ->latest('id')
            ->take(5)
            ->get();

//        return $similares;

        return view('courses.show', compact('course', 'similares'));

    }

    public function enrolled(Course $course){
//        $course->students()->attach(auth()->user()->id);

        $course_user = new CourseUser();
        $course_user->course_id = $course->id;
        $course_user->user_id = auth()->user()->id;

        $course_user->save();

        Certification::create([
            'name' => $course->title,
            'status' => '0',
            'course_user_id' => $course_user->id
        ]);

//        return redirect()->route('courses.status', $course);
        return redirect()->route('students.home')->with('info', 'Te matriculaste con éxito.');
    }

    public function register(Course $course){
        $course->students()->attach(auth()->user()->id);

        return redirect()->route('courses.status', $course);
    }

}
