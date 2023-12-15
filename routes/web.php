<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\Admin\DashboardController;

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
     return redirect('/login');
 });

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::post('/logout', 'logout')->name('logout');
});

Route::prefix('admin')->middleware(['auth'])->group(function(){
    // Dashboard
	Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('dashboard');
    
    // Payment
    Route::get('/payment', [App\Http\Controllers\Admin\ListController::class, 'index'])->name('payment.index');
    Route::get('/payment/search', [App\Http\Controllers\Admin\ListController::class, 'payment'])->name('payment.search');
    
    // Attendances
    Route::get('/attendances/logs', [App\Http\Controllers\Admin\AttendanceController::class, 'attendance'])->name('attendance.log');

    // Courses
    Route::get('/courses/', [App\Http\Controllers\Admin\CoursesController::class, 'index'])->name('courses.index');
    Route::get('/create', [App\Http\Controllers\Admin\CoursesController::class, 'create'])->name('courses.create');
    Route::post('/save', [App\Http\Controllers\Admin\CoursesController::class, 'save'])->name('courses.save');
    Route::get('/view/{id}', [App\Http\Controllers\Admin\CoursesController::class, 'view'])->name('courses.view');
    Route::get('/delete/{id}', [App\Http\Controllers\Admin\CoursesController::class, 'delete'])->name('courses.delete');
    Route::get('/edit/{id}', [App\Http\Controllers\Admin\CoursesController::class, 'edit'])->name('courses.edit');
    Route::post('/update', [App\Http\Controllers\Admin\CoursesController::class, 'update'])->name('courses.update');
    
});


