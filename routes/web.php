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
Route::get('/shop/new', 'App\Http\Controllers\ShopController@create')->name('shop.new');
Route::post('/shop', 'App\Http\Controllers\ShopController@store')->name('shop.store');
Route::get('/shop/edit/{id}', 'App\Http\Controllers\ShopController@edit')->name('shop.edit');
Route::post('/shop/update/{id}', 'App\Http\Controllers\ShopController@update')->name('shop.update');

Route::get('/shop/{id}', 'App\Http\Controllers\ShopController@show')->name('shop.detail');
Route::delete('/shop/{id}', 'App\Http\Controllers\ShopController@destory')->name('shop.destory');

Route::get('/', function () {
    //    return view('welcome');
      return redirect('/shops');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/shops',[App\Http\Controllers\ShopController::class, 'index'])->name('shop.list');
