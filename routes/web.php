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

Route::get('/', 'RoomController@index');
Route::get('/create', 'RoomController@create');
Route::post('/create', 'RoomController@store');
Route::get('/edit/{id}', 'RoomController@edit');
Route::post('/edit/{id}', 'RoomController@update');
Route::get('/view/{id}', 'RoomController@view');
Route::get('/meeting/new', 'MeetingController@create');
Route::post('/meeting/new', 'MeetingController@store');
