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

Route::get('/', 'PagesController@index');
Route::get('/aboutme', 'PagesController@aboutme');
Route::get('/java', 'PagesController@java');
Route::get('/bali', 'PagesController@bali');
Route::get('/eastern', 'PagesController@eastern');
Route::get('/secretspots', 'PagesController@secretspots');
Route::get('/p/wonderful-indonesia', 'PagesController@wonderfulindonesia');
