<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VerificationController;
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

Route::middleware(['auth', 'auth.session', 'role'])->group(function () {
    Route::prefix('backend')->name('backend.')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'get_index'])->name('dashboard');
        Route::get('/pages', [BlogController::class, 'get_index'])->name('page.index');
        Route::get('/page/{action}/{id?}', [BlogController::class, 'get_action'])->name('page.action');
        Route::post('/page/{action}/{id?}', [BlogController::class, 'post_action'])->name('page.action');
    });
});

Route::controller(VerificationController::class)->group(function () {
    Route::middleware(['auth', 'auth.session'])->group(function () {
        Route::get('account/identify', 'get_identify_account')->name('identify.account');
        Route::post('account/identify', 'post_identify_account');
    });
});

Route::controller(LoginController::class)->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/register', 'get_register')->name('register');
        Route::post('/register', 'post_register');
        Route::get('/login', 'get_login')->name('login');
        Route::post('/login', 'post_login');
    });
    Route::get('/logout', 'get_logout')->middleware(['auth', 'auth.session'])->name('logout');
});
