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

Route::get('/shops', 'App\Http\Controllers\ShopController@index')->name('shop.list');
Route::get('/shops/new', 'App\Http\Controllers\ShopController@create')->name('shop.new');
Route::get('/shops/', 'App\Http\Controllers\ShopController@store')->name('shop.store');

Route::get('/shops/{id}', 'App\Http\Controllers\ShopController@show')->name('shop.detail');

Route::get('/', function () {
    // return view('welcome');
     return redirect('/shops');
});