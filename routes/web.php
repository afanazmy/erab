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

// Admin
Route::get('/', 'LandingController@index')->name('home');
Route::get('/item', 'ItemController@index')->name('item');
Route::get('/item/create', 'ItemController@create')->name('item.create');
Route::get('/item/edit/{id}', 'ItemController@edit')->name('item.edit');
Route::post('/item/store', 'ItemController@store')->name('item.store');
Route::post('/item/update/{id}', 'ItemController@update')->name('item.update');
Route::get('/item/delete/{id}', 'ItemController@destroy')->name('item.destroy');

// Customer
Route::get('/customer/project', 'ProjectController@index')->name('project');
Route::get('/customer/project/create', 'ProjectController@create')->name('project.create');
Route::post('/customer/project/store', 'ProjectController@store')->name('project.store');
Route::get('/customer/project/{id}', 'ProjectController@show')->name('project.show');
Route::get('/customer/project/print/{id}', 'ProjectController@print')->name('project.print');
Route::post('/customer/project/delete/{id}', 'ProjectController@destroy')->name('project.destroy');

Auth::routes();
