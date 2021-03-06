<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\WithdrawController;
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

Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'get_index')->name('home');
    Route::get('/page/{page}', 'get_page')->name('page');
});

Route::middleware(['auth', 'auth.session', 'auth.role'])->group(function () {
    Route::prefix('backend')->name('backend.')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'get_index'])->name('dashboard');
        Route::get('/pages', [BlogController::class, 'get_index'])->name('page.index');
        Route::get('/page/{action}/{id?}', [BlogController::class, 'get_action'])->name('page.action');
        Route::post('/page/{action}/{id?}', [BlogController::class, 'post_action']);
        Route::get('/courses', [CourseController::class, 'get_index'])->name('course.index');
        Route::get('/course/{action}/{id?}', [CourseController::class, 'get_action'])->name('course.action');
        Route::post('/course/{action}/{id?}', [CourseController::class, 'post_action']);
        Route::get('/users', [UserController::class, 'get_index'])->name('user.index');
        Route::get('/user/profile', [UserController::class, 'get_profile'])->name('user.profile');
        Route::post('/user/profile', [UserController::class, 'post_profile']);
        Route::get('/orders', [OrderController::class, 'get_index'])->name('order.index');
        Route::get('/author/find', [AuthorController::class, 'get_index'])->name('author.find');
        Route::get('/author/info/{id}', [AuthorController::class, 'get_detail'])->name('author.detail');
        Route::get('/withdraws', [WithdrawController::class, 'get_index'])->name('withdraw.index');
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
