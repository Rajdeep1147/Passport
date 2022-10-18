<?php

use Illuminate\Support\Facades\Route;
use App\PaymentGateway\Payment;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PayOrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ZipController;


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


Route::post('register',[EmployeeController::class,'addEmployee'])->name('add.employee');
Route::any('showdetails/{id?}',[EmployeeController::class,'showDetails'])->name('show.details');
Route::get('/', function () {
    return view('welcome');
});

Route::get('userinfo',[StudentController::class,'showInfo']);

Route::any('createuser',[StudentController::class,'create']);
Route::any('delete/{id?}',[StudentController::class,'destroy']);
Route::any('trash',[StudentController::class,'trash']);
Route::any('restore/{id?}',[StudentController::class,'restore']);
Route::any('index',[EmployeeController::class,'index']);
Route::get('register',[EmployeeController::class,'register'])->name('register');
Route::get('employeeinfo',[EmployeeController::class,'employeeInfo'])->name('employee.Info');
Route::any('adddetails/{id?}',[EmployeeController::class,'addDetails'])->name('add.details');

Route::any('pay',[PayOrderController::class,'store'])->name('pay');

Route::any('testing',[PaymentController::class,'store'])->name('testing');

Route::get('log',function(){
    // \Log::info('This is My Testing Log');
    \Log::Channel('customlog')->info('This is My Custom Log');
});

Route::get('test',function(){
    // dd(env('MAIL_USERNAME'));
    // dd(config('mail.mailers.smtp.host'));
        dd(config('website.address'));

});

Route::get('custom',[TestController::class,'customProvider'])->name('custom');

Route::get('helper-log',function(){
    $msg = "This is Testing Log in Custom Helper";
    showCustomLog($msg);
    
});

Route::get('laravel-log',function(){

    \Log::Channel('mylaravel')->info('This is My Custom Log');
    return "done";
    
});

Route::any('test-helper',[TestController::class,'customHelper'])->name('helper');
/* New Added Routes */
Route::get('userverify', [EmployeeController::class, 'userVerify'])->middleware(['auth', 'is_verify_email']); 
Route::get('account/verify/{token}', [EmployeeController::class, 'verifyAccount'])->name('user.verify'); 


Route::get('download-zip', [ZipController::class, 'downloadZip'])->name('download.zip'); 

Route::get('create-file', [ZipController::class, 'checkAndCreateFile'])->name('create.file'); 

Route::get('download-sample', [ZipController::class, 'downloadSampleFile'])->name('download.sample'); 







