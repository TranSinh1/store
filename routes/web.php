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

Route::post('add-cart', 'HomeController@addCart')->name('cart.add');

Route::post('delete-cart', 'HomeController@deleteCart')->name('del.cart');

//test cart
Route::get('/remove-cart', function(){
        session()->forget('cart');
})->name('cart.clear');

Route::get('/check-cart', function(){
        dd(session('cart'));
})->name('cart.checkout');

//Route admin
Route::group(['prefix'=>'admin'], function() {

	Route::group(['prefix'=>'category'], function() {

		Route::get('list', 'Admin\CategoryController@list')->name('list.cate');

		Route::get('create', 'Admin\CategoryController@getCreate')->name('create.cate');
		Route::post('create', 'Admin\CategoryController@postCreate');

		Route::get('update/{id}', 'Admin\CategoryController@getUpdate')->name('update.cate');
		Route::post('update/{id}', 'Admin\CategoryController@postUpdate');

		Route::post('delete', 'Admin\CategoryController@delete')->name('del.cate');
	});

	Route::group(['prefix'=>'product'], function() {

		Route::get('list', 'Admin\ProductController@list')->name('list.product');

		Route::get('create', 'Admin\ProductController@getCreate')->name('create.product');
		Route::post('create', 'Admin\ProductController@postCreate');

		Route::get('update/{id}', 'Admin\ProductController@getUpdate')->name('update.product');
		Route::post('update/{id}', 'Admin\ProductController@postUpdate');

		Route::post('delete', 'Admin\ProductController@delete')->name('del.product');
	});
});


