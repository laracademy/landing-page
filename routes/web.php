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

Route::group(['prefix' => 'admin'], function() {
    Route::get('count')->uses('AdminController@getCount')->name('admin.count');
    Route::get('download')->uses('AdminController@download')->name('admin.download');
});