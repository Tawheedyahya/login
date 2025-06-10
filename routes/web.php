<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\Registercontroller;



Route::get('/', function () {
    return view('auth.login');
})->middleware('guest');


Route::get('/register', function () {
    return view('auth.register');
})->middleware('guest')->name('register');

Route::post('/register', [Registercontroller::class, 'register']);

Route::post('/', [Logincontroller::class, 'login']);


Route::get('/home', function () {
    return view('home');
})->middleware('adminauth')->name('home');


Route::get('/logout', [Logincontroller::class, 'logout'])->name('logout');

// admin
Route::prefix('admin')->group(function () {
    Route::get('/dashboard',[AdminController::class,'index']);
    Route::get('/create',[AdminController::class,'createuserview']);
    Route::post('/create',[AdminController::class,'createuser']);
    Route::get('/delete/{id}',[AdminController::class,'deleteuser']);
    Route::get('/edit/{id}',[AdminController::class,'updateuser']);
    Route::post('/edit',[AdminController::class,'updateuserdetails']);
})->middleware('adminauth');
