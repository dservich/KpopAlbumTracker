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

Auth::routes();

Route::prefix('admin')->as('admin.')->group(function(){
	Route::prefix('comebacks')->as('comebacks.')->group(function(){
		Route::get('create', 'ComebackController@create')->name('create');
		Route::post('store', 'ComebackController@store')->name('store');
	});
});


Route::get('/{any}', 'SpaController@index')->where('any', '.*')->name('spa');
