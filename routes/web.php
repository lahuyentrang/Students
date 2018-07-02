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
Route::get('/','StudentsController@index')->name('index');
Route::get('/create','StudentsController@create');
Route::post('/store','StudentsController@store');
Route::get('/delete/{id}','StudentsController@delete')->name('delete');
Route::get('/edit/{id}', 'StudentsController@edit');
Route::post('/update','StudentsController@update');
Route::get('/details/{id}', 'StudentsController@details');