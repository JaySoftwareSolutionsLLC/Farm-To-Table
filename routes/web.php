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

Route::get('/', 'MarketController@index'); //This is where we are redirected to first
Route::resource('markets', 'MarketController'); //This gives access to all of the routes in the Market Controller
Route::resource('farms', 'FarmController'); //This gives access to all of the routes in the Farm Controller
