<?php

namespace App\Http\Livewire\Admin;

use App\Models\Course;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class CoursesIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search, $coursea;
    public function render()
    {
        $courses = Course::where('title', 'LIKE', '%' . $this->search . '%')
//            ->teacher($this->search)
            ->latest('id')
            ->paginate(8);
        return view('livewire.admin.courses-index', compact('courses'));
    }
    public function limpiar_page(){
        $this->reset('page');
    }
    public function destroy(Course $course){
        $this->coursea = $course;
//        $course->delete();
//
//        session()->flash('info', 'El curso se eliminó con éxito.');
//        return redirect()->route('admin.courses.all');
    }
}
