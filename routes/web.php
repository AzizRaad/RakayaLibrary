<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Livewire\InvoiceTable;

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

Route::controller(LoginController::class)
    ->middleware('guest')
    ->group(function () {
        Route::get('/login', 'show')->name('login');
        Route::post('/login', 'login');
        Route::get('/logout', 'destroy')->name('logout');
    });

Route::controller(RegisterController::class)
    ->middleware('guest')
    ->group(function () {
        Route::get('/register', 'show')->name('register');
        Route::post('/register', 'store');
    });

Route::controller(BooksController::class)
    ->middleware('hasRoles:admin')
    ->group(function () {
        Route::get('/uploadform', 'show')->name('upload.book');
        Route::post('/uploadform', 'store');
    });

Route::controller(InvoiceController::class)
    ->middleware('auth')
    ->group(function () {
        Route::get('/invoice', 'show')->name('invoice');
        Route::get('/download/invoice/{id}', 'store')->name('download.invoice');
    });

Route::get('/', function () {
    return view('frontend.Gallery.home_page');
})->middleware('auth');
