<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\SignupController;
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


//group for paid
Route::get('signup/{planId}', [\App\Http\Controllers\SignupController::class, 'signup'])->name('signup');
Route::post('signup/store', [SignupController::class, 'store'])->name('signup.store');
Route::get('success/signup', fn() => view('plans.signup.success'))->name('signup.success');
Route::post('signup/generate-receipt', [\App\Http\Controllers\SignupController::class, 'generateReceipt'])->name('download.receipt');

//group for login
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::get('/auth/google', [LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/auth/google/callback', [LoginController::class, 'handleGoogleCallback']);
Route::post('auth/login', [LoginController::class, 'login'])->name('auth.login');

//group for dashboard
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

//group for rooms
Route::get('rooms', [RoomController::class,'index'])->name('rooms.index');
Route::post('rooms', [RoomController::class, 'store'])->name('rooms.store');
Route::post('rooms/start-meeting', [RoomController::class, 'startMeeting'])->name('rooms.startMeeting');
Route::get('rooms/edit/{id}', [RoomController::class, 'edit'])->name('rooms.edit');
Route::put('rooms/{id}', [RoomController::class, 'update'])->name('rooms.update');