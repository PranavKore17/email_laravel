<?php

use App\Http\Controllers\CookieController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('sendmail',[MailController::class,'index']);


//*****************************cookie***************************************** */

Route::get('/set-cookie',[CookieController::class,'setcookie']);

Route::get('/get-cookie',[CookieController::class,'getcookie']);

Route::get('/delete-cookie',[CookieController::class,'deletecookie']);