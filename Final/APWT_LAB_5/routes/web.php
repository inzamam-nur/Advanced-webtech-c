<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\SeejobController;
use App\Http\Controllers\ApplyjobController;


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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/tutor_regi',[TutorController::class, 'tutor_regi'])->name('tutor_regi');
Route::post('/tutor_regi',[TutorController::class, 'tutorSubmitted'])->name('tutor_regi');

//login
Route::get('/login',[logincontroller::class,'login'])->name('login');
Route::post('/login',[logincontroller::class,'loginSubmit'])->name('login');
Route::get('/logout',[logincontroller::class,'logout'])->name('logout');

Route::get('/profile',[TutorController::class,'profile'])->name('profile')->middleware('verifyuser');
Route::get('/tutorEdit/{id}',[TutorController::class, 'tutorEdit'])->name('tutorEdit')->middleware('verifyuser');
Route::post('/tutorEdit',[TutorController::class, 'tutorEditSubmitted'])->name('tutorEdit');

Route::get('/logout',[LoginController::class,'logout'])->name('logout');


Route::get('/joblist', [SeejobController::class, 'joblist'])->name('joblist');
Route::get('/jobprofile/{id}',[SeejobController::class,'jobprofile'])->name('jobprofile');

Route::get('applyjobs', [ApplyjobController::class, 'applyjobs'])->name('applyjobs')->middleware('verifyuser');
Route::get('Dashboard', [TutorController::class, 'tutordash'])->name('tutordash')->middleware('verifyuser');




