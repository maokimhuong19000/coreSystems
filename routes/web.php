<?php

use App\Http\Controllers\backend\AuthenticationController;
use App\Http\Controllers\backend\MasterPageController;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Route;

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

// Authenticatable

Route::controller(AuthenticationController::class)->group(function () {
    Route::get('/login', 'login')->name('user.login');
    Route::get('/signup', 'register')->name('user.signup');
   
})->middleware(AuthenticationController::class);



Route::controller(MasterPageController::class)->group(function(){
    route::get('/Home','index')->name('admin.home');
});