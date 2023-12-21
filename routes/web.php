<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ServiceController;

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
Route::get('/about',[FrontController::class,'about'])->name('about');
Route::get('/photo',[FrontController::class,'photo'])->name('photo');
Route::get('/forms',[FrontController::class,'forms'])->name('forms');
Route::get('/services',[FrontController::class,'services'])->name('services');




Route::get('/teacher-login',[TeacherController::class,'index'])->name('teacher.login');
Route::post('/teacher-login',[TeacherController::class,'login'])->name('teacher.login');
Route::get('/teacher-logout',[TeacherController::class,'logout'])->name('teacher.logout');

Route::get('/teacher-dashboard',[TeacherController::class,'dashboard'])->name('teacher.dashboard');
Route::get('/teacher-profile',[TeacherController::class,'profile'])->name('teacher.profile');
Route::post('/teacher-profile/update/{id}/{name}',[TeacherController::class,'profileUpdate'])->name('teacher.profile.update');
Route::get('/teacher-payment',[TeacherController::class,'payment'])->name('teacher.payment');
Route::get('/teachers',[TeacherController::class,'allTeacher'])->name('teachers');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard', [AdminController::class,'index'])->name('dashboard');

    Route::get('/invoice-create',[AdminController::class,'createInvoice'])->name('invoice.create');
    Route::post('/invoice-store',[AdminController::class,'storeInvoice'])->name('invoice.store');

    Route::get('/bill/details',[AdminController::class,'billDetails'])->name('bill.details');
    Route::get('/bill/edit/{id}',[AdminController::class,'billEdit'])->name('bill.edit');
    Route::post('/bill/update/{id}',[AdminController::class,'billupdate'])->name('bill.update');
    Route::get('/bill/print/{id}',[AdminController::class,'billPrint'])->name('bill.print');
    Route::get('/bill/invoice/{id}',[AdminController::class,'billInvoice'])->name('bill.invoice');

    Route::get('/service-details/create',[AdminController::class,'createService'])->name('service.details.create');
    Route::post('/service-details/store',[AdminController::class,'storeService'])->name('service.details.store');
    Route::get('/service-details/manage',[AdminController::class,'manageService'])->name('service.details.manage');
    Route::get('/service-details/edit/{id}',[AdminController::class,'editService'])->name('service.details.edit');
    Route::post('/service-details/update/{id}',[AdminController::class,'updateService'])->name('service.details.update');

    Route::get('/member/create',[AdminController::class,'createMember'])->name('member.create');
    Route::get('/member/index',[AdminController::class,'createIndex'])->name('member.index');
    Route::get('/member/edit/{id}',[AdminController::class,'editMember'])->name('member.edit');
    Route::post('/member/store',[AdminController::class,'storeMember'])->name('member.store');
    Route::post('/member/update/{id}',[AdminController::class,'updateMember'])->name('member.update');

    Route::get('/service/create',[ServiceController::class,'createCommunityService'])->name('service.create');
    Route::get('/service/manage',[ServiceController::class,'manageCommunityService'])->name('service.manage');
    Route::post('/service/store',[ServiceController::class,'storeCommunityService'])->name('service.store');
    Route::get('/service/edit/{id}',[ServiceController::class,'editCommunityService'])->name('service.edit');
    Route::post('/service/update/{id}',[ServiceController::class,'updateCommunityService'])->name('service.update');
    Route::get('/service/delete/{id}',[ServiceController::class,'destroyCommunityService'])->name('service.delete');

    Route::get('/',[ServiceController::class,''])->name('');

    Route::get('/category/create',[ServiceController::class,'createCategory'])->name('category.create');
    Route::post('/category/store',[ServiceController::class,'storeCategory'])->name('category.store');

    Route::get('/getServiceDetailsByYear',[AdminController::class,'getServiceDetailsByYear'])->name('getServiceDetailsByYear');
});
