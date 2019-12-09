<?php


Route::get('/', 'HomeController@index')->name('Home');
Route::get('/package', 'PackageController@index')->name('Package');
Route::get('/detail/{slug}', 'DetailController@index')->name('Detail');

// Route::get('/checkout', 'DetailController@checkout')->name('Checkout');
// Route::get('/success', 'DetailController@success')->name('Success');

Route::get('/checkout/{id}', 'Admin\CheckoutController@index')
	->name('Checkout')
	->middleware(['auth', 'verified']);

Route::post('/checkout/{id}', 'Admin\CheckoutController@process')
	->name('Checkout_process')
	->middleware(['auth', 'verified']);

Route::post('/checkout/create/{detail_id}', 'Admin\CheckoutController@create')
	->name('Checkout_create')
	->middleware(['auth', 'verified']);

Route::get('/checkout/remove/{detail_id}', 'Admin\CheckoutController@remove')
	->name('Checkout_remove')
	->middleware(['auth', 'verified']);

Route::get('/checkout/confirm/{id}', 'Admin\CheckoutController@success')
	->name('Checkout_success')
	->middleware(['auth', 'verified']);


Route::prefix('admin')
	->namespace('Admin')
	->middleware('auth', 'admin')
	->group(function () {
		Route::get('/', 'DashboardController@index')
			->name('Dashboard');

		Route::resource('transaction', 'TransactionController');
		Route::resource('travel-package', 'TravelPackageController');
		Route::resource('gallery', 'GalleryController');
	});

Auth::routes(['verify' => true]);
