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
Route::get('/user-login',[TeacherController::class,'index'])->name('user.login');
Route::post('/user-login',[TeacherController::class,'login'])->name('user.login');
Route::get('/payment',[TeacherController::class,'payment'])->name('payment')->middleware('userMiddleware');