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
Route::get('/','indexController@getPlatformList');
Route::get('/apps','AppsController@get');
Route::post('/apps','AppsController@post');
Route::get('/requests','RequestsController@get');
Route::post('/requests','RequestsController@post');
Route::get('/admin','AdminController@get');