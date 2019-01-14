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
    return view('frontend.layout.index');
});

Route::get('home', 'HomeController@homePage')->name('home');

Route::get('category/{id}', 'HomeController@category')->name('category');

Route::get('product-detail/{id}', 'HomeController@productDetail')->name('product');

Route::get('new', 'HomeController@new')->name('new');

Route::get('new-detail/{id}', 'HomeController@newDetail')->name('new.detail');
