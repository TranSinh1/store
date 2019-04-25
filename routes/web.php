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

// Route::get('/', function () {
//     return view('frontend.layout.index');
// });

Route::get('home-page', 'HomepageController@homePage')->name('home.page');

Route::get('category/{id}', 'HomepageController@category')->name('category');

Route::get('product', 'HomepageController@product')->name('product.page');

Route::get('product-detail/{id}', 'HomepageController@productDetail')->name('product');

Route::get('new', 'HomepageController@new')->name('new');

Route::get('new-detail/{id}', 'HomepageController@newDetail')->name('new.detail');

Route::post('add-cart', 'HomepageController@addCart')->name('cart.add');

Route::post('delete-cart', 'HomepageController@deleteCart')->name('del.cart');

Route::get('view-cart', 'CartController@Cart')->name('view.cart');

Route::get('remove-cart', 'CartController@removeCart')->name('remove.cart');

Route::post('update-cart', 'CartController@updateCart')->name('update.cart');

Route::get('login-admin', 'LoginLogoutController@getLogin')->name('login.admin');
Route::post('login-admin', 'LoginLogoutController@postLogin');
Route::get('logout-admin', 'LoginLogoutController@logout')->name('logout.admin');

Route::get('login-client', 'LoginLogoutController@getLoginClient')->name('login.client');
Route::post('login-client', 'LoginLogoutController@postLoginClient')->name('post.login.client');
Route::get('logout-client', 'LoginLogoutController@logoutClient')->name('logout.client');
Route::get('register-client', 'LoginLogoutController@getRegisterClient')->name('register.client');
Route::post('register-client', 'LoginLogoutController@registerClient');

Route::get('pay', 'CartController@getPay')->name('pay');
Route::post('pay', 'CartController@postPay');

Route::get('introduce', 'HomepageController@getIntroduce')->name('introduce');

//Danh sách đơn hàng người dùng
Route::get('list-order', 'HomepageController@listOrder')->name('list-order');
//Sửa thông tin người dùng
Route::get('information', 'HomepageController@viewInformation')->name('information');
Route::post('information/{id}', 'HomepageController@UpdateInfor')->name('update.infor');

//Route admin
Route::group(['prefix' => 'admin', 'middleware' => 'check.admin'], function() {

	Route::get('home-admin', 'Admin\HomeAdminController@index')->name('home.admin');
	Route::get('home-admin/getdata-doughnut/{year}', 'Admin\HomeAdminController@getDataDoughnut');
	Route::get('home-admin/year', 'Admin\HomeAdminController@getYear');
	Route::get('home-admin/getdata-line/{year}', 'Admin\HomeAdminController@getDataLine');

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

	Route::group(['prefix'=>'new'], function() {

		Route::get('list', 'Admin\NewController@list')->name('list.new');

		Route::get('create', 'Admin\NewController@getCreate')->name('create.new');
		Route::post('create', 'Admin\NewController@postCreate');

		Route::get('update/{id}', 'Admin\NewController@getUpdate')->name('update.new');
		Route::post('update/{id}', 'Admin\NewController@postUpdate');

		Route::get('delete/{id}', 'Admin\NewController@delete')->name('del.new');
	});

	Route::group(['prefix'=>'user'], function() {

		Route::get('list', 'Admin\UserController@list')->name('list.user');

		Route::get('create', 'Admin\UserController@getCreate')->name('create.user');
		Route::post('create', 'Admin\UserController@postCreate');

		Route::get('update/{id}', 'Admin\UserController@getUpdate')->name('update.user');
		Route::post('update/{id}', 'Admin\UserController@postUpdate');

		Route::get('delete/{id}', 'Admin\UserController@delete')->name('del.user');
	});

	Route::group(['prefix'=>'invoice'], function() {

		Route::get('list', 'Admin\InvoiceController@list')->name('list.invoice');

		Route::get('update/{id}', 'Admin\InvoiceController@getUpdate')->name('update.invoice');
		Route::post('update/{id}', 'Admin\InvoiceController@postUpdate');

		Route::get('delete/{id}', 'Admin\InvoiceController@delete')->name('del.invoice');
	});

	Route::group(['prefix'=>'slide'], function() {

		Route::get('list', 'Admin\SlideController@list')->name('list.slide');

		Route::get('create', 'Admin\SlideController@getCreate')->name('create.slide');
		Route::post('create', 'Admin\SlideController@postCreate');

		Route::get('update/{id}', 'Admin\SlideController@getUpdate')->name('update.slide');
		Route::post('update/{id}', 'Admin\SlideController@postUpdate');

		Route::get('delete/{id}', 'Admin\SlideController@delete')->name('del.slide');
	});

	Route::group(['prefix'=>'status'], function() {

		Route::get('list', 'Admin\StatusController@list')->name('list.status');

		Route::get('create', 'Admin\StatusController@getCreate')->name('create.status');
		Route::post('create', 'Admin\StatusController@postCreate');

		Route::get('update/{id}', 'Admin\StatusController@getUpdate')->name('update.status');
		Route::post('update/{id}', 'Admin\StatusController@postUpdate');

		Route::get('delete/{id}', 'Admin\StatusController@delete')->name('del.status');
	});
});

Route::get('pay-success', function() {
	return view('frontend.pay-success');
})->name('pay.success');