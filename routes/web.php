<?php

use App\Http\Controllers\IncidentsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PhoneNumberVerifyController;
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

Route::get('/timeline', function(){
    return view('timeline');
});

Route::get('incidents/createIncident', [IncidentsController::class, 'form'])->name('formIncident');
Route::post('incidents/createIncident', [IncidentsController::class, 'store'])->name('createIncident');
Route::get('incidents/listIncident', [IncidentsController::class, 'list'])->name('listIncidents');
Route::get('incidents/singleIncident/{id}', [IncidentsController::class, 'single'])->name('singleIncident');
Route::post('incidents/updateIncidentStatus', [IncidentsController::class, 'updateStatus'])->name('updateStatus');


//Route::get('/createIncident', function() {
//    return view('createIncident');
//});
//Route::get('phone/verify', function(){
//    return view('phoneverify.show');
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'verifiedphone'])->name('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('phone/verify', [PhoneNumberVerifyController::class, 'show'])->name('phoneverify.show');
Route::post('phone/verify', [PhoneNumberVerifyController::class, 'verify'])->name('phoneverify.verify');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
