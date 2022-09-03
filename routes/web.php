<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\AcademicsController;
use App\Http\Controllers\LibraryController;

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

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

Route::controller(UserController::class)->group(function () {
    Route::get('/login', 'login')->name('login')->middleware('guest');
    Route::post('/authenticate', 'authenticate')->name('signin');
    Route::get('/register', 'register')->name('register')->middleware('guest');
    Route::post('/signup', 'signup')->name('signup');
    Route::get('/logout', 'logout')->name('logout');
    Route::get('/verify', 'verification')->name('verify');
    Route::get('/profile', function () {
        return "hello post";
    })->name('profile');
});


Route::controller(LibraryController::class)->group(function () {
    Route::get('/library', 'index')->name('libraries'); 
    Route::get('/library/{id}', 'show')->name('library');
    // Route::get('/library/download', 'library.download')->name('library.download');
    Route::get('/libraries', 'googleBooks')->name('books');
});

Route::controller(AcademicsController::class)->group(function () {
    Route::get('/academics', 'index')->name('academics');
    Route::get('/academics/{id}', 'show')->name('academic');
});


Route::resource('articles', ArticlesController::class);

Route::controller(NewsController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/news', 'news')->name('news');
});