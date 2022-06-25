<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('api.auth')->group(function () {
    Route::controller(ApiController::class)->group(function () {
        Route::get('get-course', 'get_course');
        Route::get('get-news', 'get_news');
        Route::post('post-detail-user', 'post_detail_user');
        Route::post('post-login-user', 'post_login_user');
        Route::post('post-register-user', 'post_register_user');
    });
});
