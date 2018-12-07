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

Route::get('/', 'LandingController@index')->name('home');
Route::get('/item', 'ItemController@index')->name('item');
Route::get('/item/create', 'ItemController@create')->name('item.create');
Route::get('/item/edit/{id}', 'ItemController@edit')->name('item.edit');
Route::post('/item/update/{id}', 'ItemController@update')->name('item.update');
Route::get('/item/delete/{id}', 'ItemController@destroy')->name('item.destroy');

Auth::routes();
