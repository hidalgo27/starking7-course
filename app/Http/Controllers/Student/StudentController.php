<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Certification;
use App\Models\Course;
use App\Models\CourseCertification;
use App\Models\CourseUser;
use App\Models\User;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function home(){
        return view('student.index');
    }

    public function certification(Course $course, Certification $certification){
        $courses_1 = $course->course_certification->where('status', 1);
        $courses_2 = $course->course_certification->where('status', 2);

        $name = Auth::user()->name;
        $pdf = PDF::loadView('pdf.certificate', compact('course','courses_1', 'courses_2', 'certification', 'name'))->setPaper('a4', 'landscape');;
//        return $pdf->download('certificado_'.time().'.pdf');
        return $pdf->stream();
    }

    public function certification_off(Course $course, Certification  $certification, $name){

        $name = decrypt($name);
//        $pdf = PDF::loadView('pdf.certificate', compact('course', 'name'))->setPaper('a4', 'landscape');;
//        return $pdf->download('certificado_'.time().'.pdf');

        $courses_1 = $course->course_certification->where('status', 1);
        $courses_2 = $course->course_certification->where('status', 2);

//        $name = Auth::user()->name;
        $pdf = PDF::loadView('pdf.certificate', compact('course','courses_1', 'courses_2', 'certification', 'name'))->setPaper('a4', 'landscape');;
//        return $pdf->download('certificado_'.time().'.pdf');
        return $pdf->stream();

//        return $course;
    }

    public function verification($iduser){

        $iduser_e = decrypt($iduser);

        $user = User::where('id', $iduser_e)->first();
        $course_student = CourseUser::with('certifications','users','course')->where('user_id', $user->id)->get();

//        return $course_student;
        return view('student.certification-link', compact('course_student', 'user', 'iduser'));
    }

}
