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
use App\Hanoi;



Route::get('/', 'HanoiController@show');

Route::get('/stock/add','StockController@create');
Route::post('/stock/add','StockController@store');


Route::get('/phutho','PhuthoController@index');
Route::get('/haiduong','HaiduongController@index');
Route::get('/hungyen','HungyenController@index');
Route::get('/hoabinh','HoabinhController@index');
Route::get('/bacninh','BacninhController@index');
Route::get('/bacgiang','BacgiangController@index');
Route::get('/hanoi','HanoiController@index');
Route::get('/vinhphuc','VinhphucController@index');


Route::post('/hnview','HanoiController@search');
Route::get('/hnview','HanoiController@search');

Route::get('/searchhanoi','HanoiController@search');


Route::get('/hnvsbg','HanoiController@comparevsbg');
Route::get('/hnvsbn','HanoiController@comparevsbn');
Route::get('/hnvshd','HanoiController@comparevshd');
Route::get('/hnvshb','HanoiController@comparevshb');
Route::get('/hnvshy','HanoiController@comparevshy');
Route::get('/hnvspt','HanoiController@comparevspt');
Route::get('/hnvsvp','HanoiController@comparevsvp');


Route::get('/charthnvsbg','HanoiController@showvsbg');
Route::get('/charthnvsbn','HanoiController@showvsbn');
Route::get('/charthnvshd','HanoiController@showvshd');
Route::get('/charthnvshb','HanoiController@showvshb');
Route::get('/charthnvshy','HanoiController@showvshy');
Route::get('/charthnvspt','HanoiController@showvspt');
Route::get('/charthnvsvp','HanoiController@showvsvp');

Route::get('/chartphutho','PhuthoController@chart');
Route::get('/charthaiduong','HaiduongController@chart');
Route::get('/charthungyen','HungyenController@chart');
Route::get('/charthoabinh','HoabinhController@chart');
Route::get('/chartbacninh','BacninhController@chart');
Route::get('/chartbacgiang','BacgiangController@chart');
Route::get('/charthanoi','HanoiController@chart');
Route::get('/chartvinhphuc','VinhphucController@chart');

Route::get('/hanoi/{id}/hungyens', function($id){
   return Hanoi::find($id)->hungyens->Temperature;
});
