<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\SubjectsController;
// use App\Http\Controllers\StudentController;
// Route::get('/', function () {
//     return view('welcome');
// });

use Inertia\Inertia;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/layout', function () {
    return view('layout');
});

Route::post('/admin/students', [StudentController::class, 'store'])
    ->name('students.store');

Route::post('/admin/classroom', [ClassroomController::class, 'store'])
    ->name('classroom.store');

Route::post('/admin/teachers', [TeachersController::class, 'store'])
    ->name('teachers.store');

Route::get('/admin/teachers', [TeachersController::class, 'index'])
    ->name('admin.teachers.index');

Route::post('/admin/subjects', [SubjectsController::class, 'store'])
    ->name('subjects.store');

Route::get('/admin/subjects', [SubjectsController::class, 'index'])
    ->name('admin.subjects');





Route::get('/admin/dashboard', [DashboardController::class, 'index']);

Route::get('/admin/about', [AboutController::class, 'index']);

// Route::get('/admin/students', [StudentController::class, 'index']);

Route::get('/admin/classroom', [ClassroomController::class, 'index'])
    ->name('admin.classroom');

// Route::get('/admin/teachers', [TeachersController::class, 'index']);

// Route::get('/admin/subjects', [SubjectsController::class, 'index']);

Route::get('/admin/students', [StudentController::class, 'index'])
    ->name('admin.student.index');
