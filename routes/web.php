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
Route::get('/stock/add','StockController@create');
Route::post('/stock/add','StockController@store');

Route::get('/phutho','PhuthoController@index');
Route::get('/haiduong','HaiduongController@index');
Route::get('/hunngyen','HungyenController@index');
Route::get('/hoabinh','HoabinhController@index');
Route::get('/bacninh','BacninhController@index');
Route::get('/bacgiang','BacgiangController@index');



Route::get('/chartphutho','PhuthoController@chart');
Route::get('/charthaiduong','HaiduongController@chart');
Route::get('/charthungyen','HungyenController@chart');
Route::get('/charthoabinh','HoabinhController@chart');
Route::get('/chartbacninh','BacninhController@chart');
Route::get('/chartbacgiang','BacgiangController@chart');
