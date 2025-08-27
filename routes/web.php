<?php

use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;

// public routes
Route::get('/', function () {
    return view('welcome');
})->middleware('guest')->name('login');

Route::post('/logout',[UserController::class, 'Logout']);


// protected routes
// Route group for teachers
Route::prefix('/teacher')->middleware('auth')->group(function () {
    Route::view('/dashboard', 'teachers.Dashboard')->name('home');
    Route::view('/upload-assignment', 'teachers.pages.upload-assignment')->name('teacher-upload-assignment');


//post routes
Route::post('/upload-assignment', [AssignmentController::class, 'uploadAssignment']);


//get routes
Route::get('/get-my-batches', [App\Http\Controllers\BatchController::class, 'getMyBatches']);

Route::get('/teacher/dashboard', [TeacherController::class, 'dashboard'])->name('teacher.dashboard');
Route::get('/batch-students/{batch}', [TeacherController::class, 'getBatchStudents']);
Route::get('/teacher/attendance', [TeacherController::class, 'attendance'])->name('teacher.attendance');
 Route::get('/attendance', [TeacherController::class, 'attendance'])->name('teacher.attendance');

});


// protected routes
// Route group for admin
Route::prefix('/admin')->middleware(['auth'])->group(function ()  {
    // Route::view('/dashboard', 'admin.Dashboard')->name('admin-dashboard');
    Route::view('/add-user', 'admin.pages.add-user')->name('admin-add-user');
    // Route::view('/manage-users', 'admin.pages.manage-users')->name('admin-manage-users');
    Route::view('/dashboard', 'admin.pages.admin-dashboard')->name('admin-dashboard');
    Route::view('/add-course', 'admin.pages.add-course')->name('admin-add-course');
    Route::view('/add-batches', 'admin.pages.add-batches')->name('admin-add-batches');



    // we need get route to get courses data into add-batches
    Route::get('/add-batches', [App\Http\Controllers\CourseController::class, 'GetCourses'])->name('admin-get-courses');
    Route::get('/add-user', [App\Http\Controllers\CourseController::class, 'GetCoursesUser'])->name('admin-get-courses-user');
    Route::get('/get-relevant-batches', [App\Http\Controllers\BatchController::class, 'GetRelevantBatches'])->name('admin-get-relevant-batches');
    Route::get('/get-teachers',[App\Http\Controllers\BatchController::class, 'getTeacher'])->name('admin-get-teachers');
    // Route::get('/get-my-batches', [App\Http\Controllers\BatchController::class, 'getMyBatches']);



    Route::post('/add-user', [App\Http\Controllers\AdminController::class, 'AddUser'])->name('admin-add-user-post');
    Route::post('/add-course', [App\Http\Controllers\CourseController::class, 'AddCourse'])->name('admin-add-course-post');
    Route::post('/add-batch', [App\Http\Controllers\BatchController::class, 'AddBatch'])->name('admin-add-batch-post');

});


// Route group for students
Route::prefix('/student')->middleware(['auth'])->group(function ()  {
    Route::view('/dashboard', 'students.pages.student-dashboard')->name('student-dashboard');
    // Route::view('/view-assignments', 'students.pages.view-assignments')->name('student-view-assignments');
    // Route::post('/submit-assignment', [App\Http\Controllers\AssignmentController::class, 'submitAssignment'])->name('student-submit-assignment');
});

// Public route
// Route group for user
Route::prefix('/user')->group(function () {
    Route::view('/login', 'auth.login')->name('user-login');
    Route::post('/login', [App\Http\Controllers\UserController::class, 'login'])->name('user-login-post');
});