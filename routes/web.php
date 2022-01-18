<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PackagesController;
use App\Http\Controllers\Auth\StudentAuthController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */


Auth::routes();

Route::get('/packages', [PackagesController::class, 'index'])->name('packages.index');


Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/team', [HomeController::class, 'team'])->name('home.team');
Route::get('/reviews', [HomeController::class, 'reviews'])->name('home.reviews');
Route::resource('packages', PackagesController::class); // Gerekli bütün route'ları oluşturur



Route::get('/admin', [AdminController::class, 'adminIndex'])->name('admin.index');
Route::get('/admin/add', [AdminController::class, 'addstudent'])->name('admin.addstudent');
Route::get('/admin/students', [AdminController::class, 'students'])->name('admin.students');


Route::get('/students/login', [StudentAuthController::class, 'showLoginForm'])->name('student.login');
Route::post('/students/login', [StudentAuthController::class, 'login'])->name('student.login');
Route::get('/students/logout', [StudentAuthController::class, 'logout'])->name('student.logout');
Route::get('/students/register', [StudentController::class, 'create'])->name('student.register');
Route::resource('students', StudentController::class);
Route::group(['middleware' => ['auth:student']], function () {
    Route::get('student/dashboard', [StudentController::class, 'dashboard'])->name('student.dashboard');
});



