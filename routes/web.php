<?php

use App\Http\Controllers\Admin\UsersController;
use App\Models\Posts;
use Carbon\Carbon;
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


Route::get('/test', function () {

    $book = Posts::find(2);
    $book->title = 'sssss';
   $e =  $book->refresh();
dd($e);
});

Route::get('/', function () {

    return view('welcome');
});
Route::resource('users', UsersController::class);
