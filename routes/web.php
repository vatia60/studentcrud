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

Route::get('/', 'StudentController@index')->name('home');
Route::get('/profile', 'StudentController@profile')->name('profile');
Route::get('/contact', 'StudentController@contact')->name('contact');
Route::get('/edit/{id}', 'StudentController@edit')->name('edit');

Route::post('/store', 'StudentController@store')->name('store');
Route::post('/update/{id}', 'StudentController@update')->name('update');
Route::post('/delete/{id}', 'StudentController@delete')->name('delete');


Route::post('/select', 'SelectController@selecttest')->name('selecttest');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
