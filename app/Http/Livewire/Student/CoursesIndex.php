<?php

namespace App\Http\Livewire\Student;

use App\Models\Course;
use Livewire\Component;

class CoursesIndex extends Component
{

    public function render()
    {
        $courses = Course::with('course_user.certifications')
//            ->where('status', 3)
            ->latest('id')
            ->get();
//        $courses = Course::with(
//            ['course_user.certifications','course_user' => function($query) {$query->where('user_id', auth()->user()->id);}]
//        )->where('status', 3)
//            ->latest('id')
//            ->get();


        return view('livewire.student.courses-index', compact('courses'));
    }
}
