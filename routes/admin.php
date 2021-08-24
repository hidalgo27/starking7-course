<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\InstructorController;
use App\Http\Controllers\Admin\LevelController;
use App\Http\Controllers\Admin\PriceController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\StudentCourse;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('', [HomeController::class, 'index'])->middleware('can:Ver dashboard')->name('home');

Route::resource('roles', RoleController::class)->names('roles');

Route::resource('users', UserController::class)->only('index','edit','update')->names('users');

Route::resource('students/course', StudentCourse::class)->only('index','edit','update')->names('students.course');

Route::resource('instructors', InstructorController::class)->names('instructors');
Route::resource('students', StudentController::class)->names('students');



Route::resource('categories', CategoryController::class)->names('categories');

Route::resource('levels', LevelController::class)->names('levels');

Route::resource('prices', PriceController::class)->names('prices');


Route::get('courses', [CourseController::class, 'index'])->name('courses.index');

Route::get('courses/{course}', [CourseController::class, 'show'])->name('courses.show');

Route::post('courses/{course}/approved', [CourseController::class, 'approved'])->name('courses.approved');

Route::get('courses/{course}/observation', [CourseController::class, 'observation'])->name('courses.observation');

Route::post('courses/{course}/reject', [CourseController::class, 'reject'])->name('courses.reject');

Route::get('courses/all/list', [CourseController::class, 'all'])->name('courses.all');
Route::get('courses/all/assign/{course}', [CourseController::class, 'assign'])->name('courses.assign');
Route::post('courses/all/assign/{course}/update', [CourseController::class, 'assign_update'])->name('courses.assign.update');
Route::delete('courses/all/assign/{course}/deleted/find', [CourseController::class, 'course_deleted'])->name('courses.find.deleted');

Route::get('courses/{course}/certifications', [CourseController::class, 'certifications'])->name('courses.certifications');
Route::post('courses/{course}/certifications/store', [CourseController::class, 'certifications_store'])->name('courses.certifications.store');
Route::delete('courses/{coursecertification}/certifications/deleted', [CourseController::class, 'deleted'])->name('courses.certifications.deleted');
