<?php

namespace App\Http\Livewire\Admin;

use App\Models\Certification;
use App\Models\Course;
use App\Models\CourseUser;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class StudentsCourse extends Component
{
    use WithPagination;
//    protected $paginationTheme = 'bootstrap';
    public $search, $course_id, $count_s;

    public function render()
    {
        $courses = Course::all()->sortByDesc('id');

//        if ($this->course_id){
            $course_users = CourseUser::with('users','course','certifications')->where('course_id', $this->course_id)->latest('id')->paginate(8);

//        }else{
////            $students = Course::with('students')->get();
//            $students = Course::with(['students'=>function ($query) { $query->where('name', 'LIKE', '%' . $this->search . '%')->take('8'); }])->get()->sortByDesc('id');
//        }

        return view('livewire.admin.students-course', compact( 'courses','course_users'));
    }

    public function status($certification_id){
        $certification = Certification::find($certification_id);
        if ($certification->status == '0'){
            $certification->status = '1';
        }else{
            $certification->status = '0';
        }
        $certification->save();
        Certification::find($certification_id);
    }
    public function certification($certification_id){
        $certification = Certification::find($certification_id);
        if ($certification->status == '1'){
            $certification->status = '2';
        }else{
            $certification->status = '1';
        }
        $certification->save();
        Certification::find($certification_id);
    }
    public function certification_cip($certification_id){
        $certification = Certification::find($certification_id);
        if ($certification->status > '0' AND $certification->status < 3){
            $certification->status = '3';
        }else{
            $certification->status = '1';
        }
        $certification->save();
        Certification::find($certification_id);
    }
    public function limpiar_page(){
        $this->reset(['course_id']);
    }

    public function resetFilters(){
        $this->reset(['course_id']);
    }
}
