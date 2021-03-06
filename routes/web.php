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
   return view('welcome');

});


Route::get('items/new', 'ItemsController@create');
Route::post('items/new', 'ItemsController@store');

Route::get('/items', 'ItemsController@index');
Route::get('/items/{id}', 'ItemsController@show');

Route::get('items/{id}/edit', 'ItemsController@edit');
Route::post('items/{id}/edit', 'ItemsController@update');

Route::get('item/{id}/del', 'ItemsController@destroy');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
