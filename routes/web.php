<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('frontend.index');
});

Route::controller(LoginController::class)
->group(function () {
    Route::get('/login','show')->name('login');
    Route::post('/login','login');
});

Route::controller(RegisterController::class)
->group(function () {
    Route::get('/register','show')->name('register');
    Route::post('register','store');
});

Route::get('/user',[DashboardController::class, 'show']);
