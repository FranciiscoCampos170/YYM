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

Route::get('/', function () {
    return view('plans');
})->name('plans');

Route::get('plans/free', function (){
    return view('plans/free');
});
Route::get('plans/free/create', [\App\Http\Controllers\FreePlanController::class, 'create']);
Route::post('plans/free/store', [\App\Http\Controllers\FreePlanController::class, 'store']);
