<?php


use App\Http\Controllers\Instructor\CourseController;
use App\Http\Livewire\CoursesIndex;
use App\Http\Livewire\Instructor\CoursesCurriculum;
use Illuminate\Support\Facades\Route;

Route::redirect('', '/instructor/courses');

//Route::get('courses', CoursesIndex::class)->middleware('can:Leer cursos')->name('courses.index');

Route::resource('courses', CourseController::class)->names('courses');

Route::get('courses/{course}/curriculum', CoursesCurriculum::class)->name('courses.curriculum');
