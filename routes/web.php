<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomtypeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;

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
    return view('home');
});

// Admin Login //
Route::get('admin/login',[AdminController::class,'login']);
Route::post('admin/login',[AdminController::class,'check_login']);
Route::get('admin/logout',[AdminController::class,'logout']);


// Admin Dashboard //
Route::get('admin', function (){
    return view('dashboard');
});

// Room Type Routes //
Route::get('admin/roomtype/{id}/delete',[RoomtypeController::class,'destroy']);
Route::resource('admin/roomtype',RoomtypeController::class);

// Room Routes
Route::get('admin/rooms/{id}/delete',[RoomController::class,'destroy']);
Route::resource('admin/rooms',RoomController::class);

// Customer Routes
Route::get('admin/customer/{id}/delete',[CustomerController::class,'destroy']);
Route::resource('admin/customer',CustomerController::class); 

// Delete Image - RoomType Route
Route::get('admin/roomtypeimage/delete/{id}',[RoomtypeController::class,'destroy_image']);

// Booking Routes 
Route::get('admin/booking/{id}/delete',[BookingController::class,'destroy']);
Route::get('admin/booking/available-rooms/{checkin_date}',[BookingController::class,'available_rooms']);
Route::resource('admin/booking',BookingController::class);

//Customer Login and Register; also Logout
Route::get('login',[CustomerController::class,'login']);
Route::get('register',[CustomerController::class,'register']);

