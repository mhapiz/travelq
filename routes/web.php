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

Route::get('/', 'HomeController@index')->name('Home');
Route::get('/package', 'PackageController@index')->name('Package');
Route::get('/detail', 'DetailController@index')->name('Detail');
Route::get('/checkout', 'DetailController@checkout')->name('Checkout');
Route::get('/success', 'DetailController@success')->name('Success');

Route::prefix('admin')
    ->namespace('Admin')
    ->group(function () {
        Route::get('/', 'DashboardController@index')
            ->name('Dashboard');
    });
