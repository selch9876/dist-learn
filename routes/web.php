<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PackagesController;
use App\Http\Controllers\StudentController;

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
Route::get('/', [HomeController::class, 'index'])->name('home.index');


Route::get('/packages', [PackagesController::class, 'index'])->name('packages.index');

Route::resource('packages', PackagesController::class); // Gerekli bütün route'ları oluşturur



Route::get('/admin', [AdminController::class, 'adminIndex'])->name('admin.index');
Route::get('/admin/add', [AdminController::class, 'addstudent'])->name('admin.addstudent');
Route::get('/admin/students', [AdminController::class, 'students'])->name('admin.students');


Route::get('/team', [HomeController::class, 'team'])->name('home.team');
Route::get('/reviews', [HomeController::class, 'reviews'])->name('home.reviews');
Route::resource('students', StudentController::class);