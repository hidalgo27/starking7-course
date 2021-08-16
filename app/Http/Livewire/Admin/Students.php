<?php

namespace App\Http\Livewire\Admin;

use App\Models\CourseUser;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Students extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    public function render()
    {
        $course_users = CourseUser::with(['course','users'=>function ($query) {$query->where('name', 'LIKE', '%' . $this->search . '%');}])->paginate(10);
        return view('livewire.admin.students', compact('course_users'));
    }
    public function limpiar_page(){
        $this->reset('page');
    }
    public function destroy(User $user){
        $user->delete();

        session()->flash('info', 'El alumno se eliminó con éxito.');
        return redirect()->route('admin.students.index');
    }
}
