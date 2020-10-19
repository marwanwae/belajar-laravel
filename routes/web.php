<?php

use App\Http\Controllers\PageController;
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



Route::get('/', [PageController::class, 'index'])->middleware('guest');
Route::get('/home', [PageController::class, 'home'])->middleware('auth');
Route::get('/about', [PageController::class, 'about']) ->name('about');
Route::get('/profil', [PageController::class, 'profil']) ->name('profil')->middleware('auth');
Route::get('/login', [PageController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login-proses', [PageController::class, 'loginProses'])->middleware('guest');
Route::get('/register', [PageController::class, 'register'])->middleware('guest');
Route::post('/register-proses', [PageController::class, 'registerProses'])->middleware('guest');
Route::get('/logout', [PageController::class, 'logout'])->name('logout')->middleware('auth');

