<?php

use Illuminate\Support\Facades\Route;

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

Route::prefix('customer')->group(function (){
    Route::get('/','CustomerController@index')->name('customer.index');
    Route::get('/create','CustomerController@create')->name('customer.create');
    Route::post('/store','CustomerController@store')->name('customer.store');
    Route::get('/{id}/edit','CustomerController@edit')->name('customer.edit');
    Route::post('/{id}/update','CustomerController@update')->name('customer.update');
    Route::get('{id}/delete','CustomerController@destroy')->name('customer.destroy');
});
Route::prefix('city')->group(function (){
    Route::get('/','CityController@index')->name('city.index');
    Route::get('/create','CityController@create')->name('city.create');
    Route::post('/store','CityController@store')->name('city.store');
    Route::get('/{id}/edit','CityController@edit')->name('city.edit');
    Route::post('/{id}/update','CityController@update')->name('city.update');
    Route::get('/{id}/delete','CityController@destroy')->name('city.delete');
});
