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


Route::get('/', 'PageController@landing')->name('landing');
Route::get('/music', 'PageController@music')->name('music');
Route::get('/news', 'PageController@news')->name('news');
Route::get('/gallery', 'PageController@gallery')->name('gallery');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/media', 'PageController@media')->name('media');
Route::get('/merch', 'PageController@merch')->name('merch');

