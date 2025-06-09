<?php

use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\Registercontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Auth as a;

Route::get('/',function(){
    return view('auth.login');
})->middleware('guest');

Route::post('/register',[Registercontroller::class,'register']);

Route::get('/register',function(){
    return view('auth.register');
})->middleware('guest')->name('register');

Route::get('/home',function(){
    return view('home');
})->middleware('a');

Route::get('/ka',function(){
    return view('home');
});
// Route::middleware(['a'])->group(function () {
//     Route::gte('/ka',function(){
//     return view('home');
// });
// });
Route::Post('/',[Logincontroller::class,'login']);
Route::get('/logout',[Logincontroller::class,'logout']);
// Route::prefix()->group(fuc)
