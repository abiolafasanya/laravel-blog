<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/posts', function () {
    return "hello post";
})->name('posts');

Route::get('/articles', function () {
    return "hello article";
})->name('articles');

Route::get('/library', function () {
    return "hello library";
})->name('library');

Route::get('/profile', function () {
    return "hello post";
})->name('profile');

Route::get('/logout', function () {
    return "hello logout";
})->name('logout');


// Route::resource('aritcles', ArticlesController::class);
// Route::resource('post', PostsController::class)->name('posts');
// Route::controller('users', 'UserController');