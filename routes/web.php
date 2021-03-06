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

Route::get('/', 'LinkController@index')->name('homepage');
Route::get('/{short_link}', 'LinkController@redirectLink')->name('link.redirect');

Route::resource('/link', 'LinkController');
