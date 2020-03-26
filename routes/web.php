<?php

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

Route::prefix('admin')->namespace('Admin')->group(function () {
    Route::prefix('public')->group(function () {
        Route::get('login',  'PublicController@login');
        Route::get('check',  'PublicController@check');
    });
});

