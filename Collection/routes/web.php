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

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::group(['middleware'=>'auth'], function(){
	
	Route::resource('category', 'CategoryController');
	Route::get('category-index', 'CategoryController@index')->name('category.index');
	Route::get('category-create', 'CategoryController@create')->name('category.create');
	Route::post('category-store', 'CategoryController@store')->name('category.create');
	Route::get('category-edit/{id?}', 'CategoryController@edit')->name('category.edit');
	Route::post('category-update', 'CategoryController@update')->name('category.update');
	Route::get('category-destroy/{id?}', 'CategoryController@destroy')->name('category.destroy');
	
});

Route::group(['middleware'=>'auth'], function(){
	
	Route::resource('coin', 'CoinController');
	Route::get('coin-index', 'CoinController@index')->name('coin.index');
	Route::get('coin-details/{id?}', 'CoinController@details')->name('coin.details');
	Route::get('coin-create', 'CoinController@create')->name('coin.create');
	Route::post('coin-store', 'CoinController@store')->name('coin.store');
	Route::get('coin-edit/{id?}', 'CoinController@edit')->name('coin.edit');
	Route::post('coin-update', 'CoinController@update')->name('coin.update');
	Route::get('coin-destroy/{id?}', 'CoinController@destroy')->name('coin.destroy');
});
