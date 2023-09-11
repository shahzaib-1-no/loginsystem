<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\datacontroller;
use App\Http\Controllers\googlecontroller;
use App\Http\Controllers\facebookcontroller;
use Laravel\Socialite\Facades\Socialite;

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
Route::get('/auth/redirect',[googlecontroller::class,'newuser']);
Route::get('add_data',[datacontroller::class,'add_data']);
Route::get('/auth/google/callback',[googlecontroller::class,'googlelogin']);

Route::get('/add_fb_data',[facebookcontroller::class,'add_data']);
Route::get('/auth/facebook/callback',[googlecontroller::class,'facebooklogin']);