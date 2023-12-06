<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\TeacherController;
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

Route::get('/',[FrontController::class,'index'])->name('home');
Route::get('/contact',[FrontController::class,'contact'])->name('contact');
Route::get('/teacher-login',[TeacherController::class,'index'])->name('teacher.login');
Route::post('/teacher-login',[TeacherController::class,'login'])->name('teacher.login');
Route::get('/teacher-logout',[TeacherController::class,'logout'])->name('teacher.logout');
Route::get('/payment',[TeacherController::class,'payment'])->name('payment')->middleware('TeacherMiddleware');

Route::get('/teacher-dashboard',[TeacherController::class,'dashboard'])->name('teacher.dashboard');
Route::get('/teacher-profile',[TeacherController::class,'profile'])->name('teacher.profile');
Route::post('/teacher-profile/update/{id}/{name}',[TeacherController::class,'profileUpdate'])->name('teacher.profile.update');