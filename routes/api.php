<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APi\Users\UsersController;
use App\Http\Controllers\APi\Posts\PostsController;
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


Route::group(['namespace' => 'APi', 'prefix' => 'v1/app/'], function () {

        // posts
        Route::group(['namespace' => 'Posts'], function () {
            Route::get('posts',[PostsController::class,'getAllData']); //posts
            Route::get('post/{id}',[PostsController::class,'getDataById']); //posts
        });

        Route::group(['namespace' => 'Users'], function () {
            Route::get('users', [UsersController::class,'index']); // users
            Route::get('user/{id}', [UsersController::class,'getById']); //pos get user by id
        });


});
