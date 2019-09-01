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


// Route::resource('/', 'TaskController');

Route::get('','TaskController@index')->name('index');
Route::get('create','TaskController@create')->name('create');
Route::post('store','TaskController@store')->name('store');
Route::get('edit/{task}','TaskController@edit')->name('edit');
Route::get('show/{task}','TaskController@show')->name('show');
Route::patch('update/{task}','TaskController@update')->name('update');
Route::delete('delete/{task}','TaskController@destroy')->name('destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
