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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::post('sign-up')->uses('EmailController@store')->name('signup');

Route::get('get-count')->uses('AdminController@getCount');
Route::get('download')->uses('AdminController@download');