<?php

use App\Http\Controllers\Auth\LoginRegisterController;
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

/*Route::view('/login', "sign-in")->name('login');
Route::view('/register', "sign-up")->name('register');
Route::view('/dashboard', "dashboard")->name('dashboard');*/

//Auth::routes([
//    "verify" => true
//]);

Route::controller(LoginRegisterController::class)->group(function(){

    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/logout', 'logout')->name('logout');
});



//Route::controller(LoginController::class)->group(function () {
//    Route::post('/session-startup', 'login');
//    Route::post('/check-register', 'register');
////    Route::get('/logout', 'logout');
//});

//Route::post('/check-register',[LoginController::class,'register'])->name('check-register');
//Route::post('/session-startup',[LoginController::class,'login'])->name('session-startup');
//Route::get('/logout',[LoginController::class,'logout'])->name('logout');
