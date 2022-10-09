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

Route::get('/', 'ShopController@index');

Route::get('/serch', 'ShopController@serch');
Route::get('/serch/all', 'ShopController@serchall');
Route::get('/serch/create', 'ShopController@create');
Route::post('/serch/create', 'ShopController@store');
Route::get('/shop/{shop}', 'ShopController@createshow');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
