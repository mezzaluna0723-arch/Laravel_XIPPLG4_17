<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\StudentController; // ← Tambahkan “Admin\”
use App\Http\Controllers\Admin\AttendanceController;

// Route halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Group route untuk admin
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('students', StudentController::class);
    Route::resource('attendances', AttendanceController::class);
});

