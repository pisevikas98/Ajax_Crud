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

Route::get('ajaxCreate','ajaxController@ajaxCreate');
Route::post('ajaxSave','ajaxController@ajaxSave');
Route::get('ajaxread','ajaxController@ajaxread');
Route::get('ajaxEdit/{ajax_id}','ajaxController@ajaxEdit');
Route::post('ajaxUpdate/{ajax_id}','ajaxController@ajaxUpdate');
Route::get('ajaxDelete/{ajax_id}','ajaxController@ajaxDelete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes(['verify' => true]);
  
Route::get('/home', 'ajaxController@index')->name('home');
