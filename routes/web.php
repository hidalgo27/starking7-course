<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Student\StudentController;
use App\Http\Livewire\CourseStatus;
use App\Http\Livewire\Student\RegisterIndex;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class)->name('home');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/students', [StudentController::class, 'home'])->name('students.home');
Route::middleware(['auth:sanctum', 'verified'])->get('/students/certification/{course}/{certification}', [StudentController::class, 'certification'])->name('students.certification');
Route::get('/students/certification/{course}/{certification}/{user}/off', [StudentController::class, 'certification_off'])->name('students.certification_off');
Route::get('/students/certification/show/{iduser}/verification', [StudentController::class, 'verification'])->name('students.verification');

Route::get('cursos', [CourseController::class, 'index'])->name('courses.index');

Route::get('cursos/{course}', [CourseController::class, 'show'])->name('courses.show');

Route::post('courses/{course}/enrolled', [CourseController::class, 'enrolled'])->middleware('auth')->name('courses.enrolled');
Route::post('courses/{course}/register', [CourseController::class, 'register'])->middleware('auth')->name('courses.register');

//Route::get('course-status/{course}', [CourseController::class, 'status'])->name('courses.status');
Route::get('course-status/{course}', CourseStatus::class)->name('courses.status')->middleware('auth');

Route::get('student/register', RegisterIndex::class)->name('student.index');
