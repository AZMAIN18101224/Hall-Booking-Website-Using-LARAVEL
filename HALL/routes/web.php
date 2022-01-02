<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;
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

Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/add_hall_view',[AdminController::class,'addview']);



Route::post('/upload_hall',[AdminController::class,'upload']);


Route::post('/booking',[HomeController::class,'booking']);


Route::get('/mybookings',[HomeController::class,'mybookings']);


Route::get('/cancel_book/{id}',[HomeController::class,'cancel_book']);


Route::get('/showbooking',[AdminController::class,'showbooking']);


Route::get('/approved/{id}',[AdminController::class,'approved']);


Route::get('/canceled/{id}',[AdminController::class,'canceled']);


Route::get('/showhall',[AdminController::class,'showhall']);


Route::get('/deletehall/{id}',[AdminController::class,'deletehall']);


Route::get('/updatehall/{id}',[AdminController::class,'updatehall']);


Route::post('/edithall/{id}',[AdminController::class,'edithall']);











