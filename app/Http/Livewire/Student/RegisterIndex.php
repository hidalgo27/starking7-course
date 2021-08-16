<?php

namespace App\Http\Livewire\Student;

use App\Models\Certification;
use App\Models\Course;
use App\Models\CourseUser;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class RegisterIndex extends Component
{
    public $name, $email, $celular, $password, $course;

    public function mount(Course $course){
        $this->course = $course;
    }
    public function render()
    {
        return view('livewire.student.register-index');
    }

    public function store(){
        $this->validate( [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password)
        ]);

        Auth::login($user, true);

//        $course_user = $this->course->students()->attach(auth()->user()->id);

        $course_user = new CourseUser();
        $course_user->course_id = $this->course->id;
        $course_user->user_id = auth()->user()->id;

        $course_user->save();

        Certification::create([
            'name' => $this->course->title,
            'status' => '0',
            'course_user_id' => $course_user->id
        ]);

        session()->flash('info', 'Te matriculaste con éxito.');
        return redirect()->route('students.home');

    }
}
