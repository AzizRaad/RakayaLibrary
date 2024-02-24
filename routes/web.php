<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BooksController;

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
    return view('frontend.home.data_table');
});

Route::controller(LoginController::class)
->group(function () {
    Route::get('/login','show')->name('login');
    Route::post('/login','login');
    Route::get('/logout','destroy');
});

Route::controller(RegisterController::class)
->group(function () {
    Route::get('/register','show')->name('register');
    Route::post('/register','store');
});

Route::controller(BooksController::class)
->group(function () {
    Route::get('/uploadform','show');
    Route::post('/uploadform','store');
});

Route::get('/user',[DashboardController::class, 'show'])->middleware('auth');
