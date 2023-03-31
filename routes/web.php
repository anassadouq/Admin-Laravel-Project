<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DashboardController;

Route::view('/', 'auth.login');
Auth::routes();
Route::get('/home', [HomeController::class, 'index']);
Route::resource('admin',AdminController::class);
Route::get('/generatepdf/{userId}', [AdminController::class, 'generatepdf'])->name('attestation');
Route::get('/generateabsence/{userId}', [AdminController::class, 'generateabsence'])->name('absence');
Route::get('donutchart',[ChartController::class,'DonutChart']);