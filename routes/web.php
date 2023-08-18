<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\InterfaceController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// midle
// Route::middleware(['auth'])->group(function () {
// });
Route::match(['GET', 'POST'], '/list_users', [StudentController::class, 'listUsers'])->name('search-student');
Route::match(['GET', 'POST'], '/add_user', [StudentController::class, 'add'])->name('add-user');
Route::match(['GET', 'POST'], '/edit_user/{id}', [StudentController::class, 'edit'])->name('edit-user');
Route::get('/delete/user/{id}', [StudentController::class, 'delete'])->name('delete-user');
// instructors
Route::match(['GET', 'POST'], '/add_instructor', [InstructorController::class, 'add'])->name('add-instructor');
Route::match(['GET', 'POST'], '/list_instructor', [InstructorController::class, 'listInstructor'])->name('search-instructor');
Route::get('/delete/instructor/{id}', [InstructorController::class, 'delete'])->name('delete-instructor');
Route::match(['GET', 'POST'], 'edit_instructor/{id}', [InstructorController::class, 'editInstructor'])->name('edit-instructor');
// login
Route::match(['GET', 'POST'], '/login', [LoginController::class, 'login'])->name('login');
Route::match(['GET', 'POST'], '/register', [RegisterController::class, 'login'])->name('register');
// interface
Route::match(['GET', 'POST'], '/detail_course', [InterfaceController::class, 'detailCourse'])->name('detail');
Route::match(['GET', 'POST'], '/all_course', [InterfaceController::class, 'listCourses'])->name('list');
// dashboard
Route::match(['GET', 'POST'], '/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// course
Route::match(['GET', 'POST'], '/add_course', [CourseController::class, 'add'])->name('add-course');
// Route::match(['GET', 'POST', '/list_course', [CourseController::class, 'listCourse']])->name('list-course');
