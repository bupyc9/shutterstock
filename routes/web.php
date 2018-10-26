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

Route::get('/', 'SearchController@index')->name('searchIndex');
Route::get('/search', 'SearchController@search')->name('search');

Route::get('/results/{id}', 'SearchResultsController@index')->name('searchResults');