<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    return view('index');
})->name('home');

Route::middleware(['auth', 'auth.session'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/register', 'get_register')->name('register');
    Route::post('/register', 'post_register');
    Route::get('/login', 'get_login')->name('login');
    Route::post('/login', 'post_login');
    Route::get('/logout', 'get_logout')->name('logout');
});
