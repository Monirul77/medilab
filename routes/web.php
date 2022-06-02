<?php

use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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

 

Auth::routes();
  
Route::get('/',[FontendController::class,'index'])->name('user');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware(['auth','verified']);
 
Route::get('admin/home', [HomeController::class, 'handleAdmin'])->name('admin.home') ;
 
Route::get('/admin/logout', [HomeController::class, 'logout'])->name('admin.logout');


Route::get('admin/edit/doctor/{doctor_id}',[DoctorController::class,'editDoctor']);
 


//===============================Admin panel===================================

 

Route::prefix('/admin')->group(function()  {
    Route::get('/doctor',[DoctorController::class,'index'])->name('admin-doctor');
    Route::post('/add/doctor',[DoctorController::class,'addDoctor'])->name('add-doctor');
    Route::get('/manage/doctor',[DoctorController::class,'manageDoctor'])->name('manage-doctor');
    Route::get('/edit/doctor/{doctor_id}',[DoctorController::class,'editDoctor']);
    Route::get('/doctor/delete/{id}',[DoctorController::class,'delete']);
    Route::get('/doctor/active/{id}',[DoctorController::class,'active']);

});


//=========================admin Appointment===================================

Route::prefix('/admin')->group(function(){

    Route::get('/appoint',[AppointmentController::class,'index'])->name('admin-appoint');
    Route::get('/appoint/approve/{id}',[AppointmentController::class,'approve']);
    Route::get('/appoint/delete/{id}',[AppointmentController::class,'delete']);

});



//==========================frontend site=============================================


Route::prefix('/')->group(function(){
    Route::get('/doctors',[FontendController::class,'doctor'])->name('doctor'); 
    Route::get('/about',[FontendController::class,'about'])->name('about'); 
    Route::get('/news',[FontendController::class,'news'])->name('news'); 
    Route::get('/contact',[FontendController::class,'contact'])->name('contact'); 
    Route::get('/appointment',[FontendController::class,'appointment'])->name('appointment'); 
    Route::post('/appointment/post',[FontendController::class,'appointDone'])->name('appointment-done'); 
    Route::get('/myappoint',[FontendController::class,'myAppoint'])->name('my-appoint'); 
    Route::get('/appoint/cancel/{id}',[FontendController::class,'appointCancel'])->name('appoint-cancel'); 
});

 



//=======================mail============================


Route::get('/contact-us',[MailController::class,'contact'])->name('contact');
Route::post('/send-email',[MailController::class,'sendMail'])->name('send-mail');
 

