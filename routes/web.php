<?php

use Illuminate\Support\Facades\Route;

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
//group of plans
Route::get('/', function () {
    return view('plans');
})->name('plans');

Route::get('plans/free', function (){
    return view('plans/free');
});
//group of free
Route::get('plans/free/create', [\App\Http\Controllers\FreePlanController::class, 'create'])->name('create.free_plan');
Route::post('plans/free/store', [\App\Http\Controllers\FreePlanController::class, 'store'])->name('store.free_plan');
Route::get('join-free-meeting/{meetingId}', [\App\Http\Controllers\FreePlanController::class, 'joinFreeMeeting'])->name('join.free_meeting');
Route::post('join-free-meeting',[\App\Http\Controllers\FreePlanController::class, 'submitJoinFreeMeeting'])->name('join.submit_free_meeting');
