<?php
use App\Http\Controllers\Auth\TeacherAuthController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// Redirect the root URL to the teacher login page
Route::redirect('/', '/login');

// Authentication Routes for Teachers
Route::get('login', [TeacherAuthController::class, 'showLoginForm'])->name('teacher.login');
Route::post('login', [TeacherAuthController::class, 'login'])->name('teacher.login.post');
Route::post('logout', [TeacherAuthController::class, 'logout'])->name('teacher.logout');

Route::get('register', [TeacherAuthController::class, 'showRegisterForm'])->name('teacher.register');
Route::post('register', [TeacherAuthController::class, 'register'])->name('teacher.register.post');

// Dashboard Route for Teachers (protected by auth middleware)
Route::middleware(['auth:teacher'])->group(function () {
    Route::get('dashboard', function () {
        return view('teacher.dashboard');
    })->name('teacher.dashboard');
    Route::resource('students', StudentController::class);
    
});

