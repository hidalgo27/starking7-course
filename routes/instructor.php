<?php


use App\Http\Controllers\Instructor\CourseController;
use App\Http\Livewire\CoursesIndex;
use Illuminate\Support\Facades\Route;

Route::redirect('', '/instructor/courses');

//Route::get('courses', CoursesIndex::class)->middleware('can:Leer cursos')->name('courses.index');

Route::resource('courses', CourseController::class)->names('courses');
