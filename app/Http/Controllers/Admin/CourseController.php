<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ApprovedCourse;
use App\Mail\RejectCourse;
use App\Models\Category;
use App\Models\Course;
use App\Models\CourseCertification;
use App\Models\Level;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Role;

class CourseController extends Controller
{
    public function index(){

        $courses = Course::where('status', 2)->paginate();
        return view('admin.courses.index', compact('courses'));
    }

    public function all(){

        return view('admin.courses.all');
    }

    public function assign(Course $course){
        $instructors = User::role(['instructor'])->get();
        $instructors = $instructors->pluck('name', 'id');

        return view('admin.courses.assign', compact('course', 'instructors'));
    }

    public function assign_update(Request $request, Course $course){

        $course->update($request->all());

        return back();
    }

    public function show(Course $course){
        $this->authorize('revision', $course);
        return view('admin.courses.show', compact('course'));
    }

    public function approved(Course $course){
        $this->authorize('revision', $course);

        if (!$course->lessons OR !$course->goals OR !$course->requirements OR !$course->image){
            return back()->with('info', 'No se puede publicar un curso que no este completo');
        }

        $course->status = 3;
        $course->save();

        //enviar correo electronico
        $mail = new ApprovedCourse($course);

        Mail::to($course->teacher->email)->queue($mail);

        return redirect()->route('admin.courses.index')->with('info', 'El curso se publicó con éxito');
    }

    public function observation(Course $course){
        return view('admin.courses.observation', compact('course'));
    }

    public function reject(Request $request, Course $course){

        $request->validate([
           'body' => 'required'
        ]);

        $course->observation()->create($request->all());

        $course->status = 1;
        $course->save();

        //enviar correo electronico
        $mail = new RejectCourse($course);

        Mail::to($course->teacher->email)->queue($mail);

        return redirect()->route('admin.courses.index')->with('info', 'El curso se ha rechazado con éxito');

    }

    public function certifications(Course $course){

        return view('admin.courses.certifications', compact('course'));
    }

    public function certifications_store(Request $request, Course $course){
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'hours' => 'required',
            'status' => 'required',
            'file' => 'required|image',
            'course_id' => 'required'
        ]);

        $course_certification = CourseCertification::create($request->all());

        if ($request->file('file')){
            $url = Storage::put('courses/certification', $request->file('file'));

            $course_certification->update([
                'image' => $url
            ]);
        }

        return redirect()->route('admin.courses.certifications', $course)->with('info', 'Se creo certificado con éxito');

//        return redirect()->route('admin.courses.certifications');
    }

    public function deleted(CourseCertification $coursecertification)
    {
        Storage::delete($coursecertification->image);
        $coursecertification->delete();
        return back()->with('info', 'El certificado se eliminó con éxito');
    }
}
