<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\trutorcontrollerapi;
use App\Http\Controllers\seejobscontrollerapi;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/joblist', [seejobscontrollerapi::class, 'joblist'])->name('joblist');
Route::post('/tutor_regi',[trutorcontrollerapi::class, 'tutorSubmitted'])->name('tutor_regi');


