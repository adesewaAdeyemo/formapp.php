<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;

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

Route::get('/',[pageController::class, 'register'])-> name('register')->middleware('guest');
//Route::get('/login',[pageController::class, 'home'])-> name('login')->middleware('guest');
Route::get('/home',[pageController::class, 'home'])-> name('home');
Route::get('/logout',[pageController::class, 'register'])-> name('log')->middleware('guest');
Route::post('/registerlog',[pageController::class, 'registerlog'])-> name('registerlog')->middleware('guest');
Route::post('/login',[pageController::class, 'login'])-> name('login')->middleware('guest');
Route::post('/logout',[pageController::class, 'logout'])-> name('logout')->middleware('auth');