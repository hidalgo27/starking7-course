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
    public $search;
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
}
