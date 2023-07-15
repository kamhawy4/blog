<?php

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

Route::group(['namespace' => 'App\Http\Controllers\APi', 'prefix' => 'v1/app/'], function () {

        // posts
        Route::group(['namespace' => 'Posts'], function () {
            Route::resource('posts',PostsController::class);
        });

        // users
        Route::group(['namespace' => 'Users'], function () {
            Route::resource('users', UsersController::class);
        });

});
