<?php

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

Route::middleware('loggedin')->group(function() {
    Route::get('login', 'AuthController@loginView')->name('login-view');
    Route::post('login', 'AuthController@login')->name('login');
    Route::get('register', 'AuthController@registerView')->name('register-view');
    Route::post('register', 'AuthController@register')->name('register');
});

Route::middleware('auth')->group(function() {
    Route::get('/', 'PageController@loadPage')->name('dashboard');
    Route::get('logout', 'AuthController@logout')->name('logout');
    Route::get('page/{layout}/{pageName}', 'PageController@loadPage')->name('page');
});
