<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DemoController;

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

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/hello',function(){

    return "hellow world";
});


Route::get('/name',function(){

    return "my name is monir";
});

Route::get('/home',function(){

    return view('Homepage');
});

Route::get('/about',function(){

    return view('AboutPage');
});
Route::get('/contact',function(){

    return view('ContactPage');
});
*/

///cal by controller;
Route::get('/home', [HomeController::class,'Home']);
Route::get('/about', [HomeController::class,'About']);
Route::get('/contact', [HomeController::class,'Contact']);




Route::get('/name/{firstname}/{secondname}/{thirdname}', [DemoController::class,'MyName']);