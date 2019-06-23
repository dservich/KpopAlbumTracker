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
		Route::get('', 'ComebackController@index')->name('index');
		Route::get('create', 'ComebackController@create')->name('create');
		Route::post('store', 'ComebackController@store')->name('store');
	});

	Route::prefix('artists')->as('artists.')->group(function(){
		Route::get('create', 'ArtistController@create')->name('create');
		Route::post('store', 'ArtistController@store')->name('store');
	});

	Route::prefix('recordlabels')->as('recordlabels.')->group(function(){
		Route::get('create', 'RecordLabelController@create')->name('create');
		Route::post('store', 'RecordLabelController@store')->name('store');
	});
});


Route::get('/{any}', 'SpaController@index')->where('any', '.*')->name('spa');
