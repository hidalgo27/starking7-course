<?php

namespace App\Http\Livewire\Admin;

use App\Models\Course;
use App\Models\Goal;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class InstructorIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    public function render()
    {
        $users = User::role(['instructor'])
            ->where('name', 'LIKE', '%' . $this->search . '%')
            ->paginate(8);
        return view('livewire.admin.instructor-index', compact('users'));
    }
    public function limpiar_page(){
        $this->reset('page');
    }
    public function destroy(User $user){
        $user->delete();

        session()->flash('info', 'El instructor se eliminó con éxito.');
        return redirect()->route('admin.instructors.index');
    }
}
