<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\TestController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('show',[UserController::class,'userShow']);

Route::post('login',[UserController::class,'userLogin']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();

// });

Route::group(['middleware'=>'auth:sanctum'],function(){
    Route::get('get-user',[TestController::class,'getUser'])->name('getuser');
});

Route::post('upload-file',[TestController::class,'fileUpload'])->name('file.upload');

Route::post('login-api',[TestController::class,'index']);


// Route::get('mypage',function(){
//     return "Done";
// })->middleware('auth:api');