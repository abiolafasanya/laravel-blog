<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticlesController;

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
    return view('welcome');
})->name('home');

Route::controller(UserController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('signin');
    Route::get('/register', 'register')->name('register');
    Route::post('/signup', 'signup')->name('signup');
    Route::get('/logout', 'logout')->name('logout');
});

Route::get('/posts', function () {
    return "hello post";
})->name('posts');

Route::get('/library', function () {
    return "hello library";
})->name('library');

Route::get('/profile', function () {
    return "hello post";
})->name('profile');

Route::resource('articles', ArticlesController::class);