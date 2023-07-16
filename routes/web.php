<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\TeachController;

use App\Http\Controllers\ParentController;


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

Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::post('/add_user',[AdminController::class,'add_user']);

Route::post('/add_subject',[AdminController::class,'add_subject']);

Route::post('/add_invoice',[AdminController::class,'add_invoice']);

Route::get('/delete_user/{id}',[AdminController::class,'delete_user']);

Route::get('/delete_invoice/{id}',[AdminController::class,'delete_invoice']);

Route::get('/delete_subject/{id}',[AdminController::class,'delete_subject']);

Route::get('/update_invoice/{id}',[AdminController::class,'update_invoice']);

Route::get('/pay_invoice/{id}',[ParentController::class,'pay_invoice']);

Route::post('/add_submission',[ParentController::class,'add_submission']);

Route::get('/delete_submission/{id}',[ParentController::class,'delete_submission']);

Route::post('/add_report',[TeachController::class,'add_report']);

Route::post('/add_assignment',[TeachController::class,'add_assignment']);

Route::get('/complete_assignment/{id}',[TeachController::class,'complete_assignment']);

Route::get('/delete_assignment/{id}',[TeachController::class,'delete_assignment']);

Route::get('/delete_report/{id}',[TeachController::class,'delete_report']);

Route::post('/send_announcement',[TeachController::class,'send_announcement']);

Route::get('/delete_announcement/{id}',[TeachController::class,'delete_announcement']);

Route::get('/grade_submission/{id}',[TeachController::class,'grade_submission']);