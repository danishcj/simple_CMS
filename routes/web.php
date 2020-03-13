<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;


// Default Views
Route::get('/', function () {
    return view('auth/login');
});

Route::get('/dashboard', 'ProductsController@index')->name('dashboard.index')->middleware('administrator');

// PRODUCTS
Route::post('/products', 'ProductsController@store')->name('products.store')->middleware('contentadmin');
Route::get('/products/create', 'ProductsController@create')->name('products.create')->middleware('contentadmin');
Route::get('/products/{product}', 'ProductsController@edit')->name('products.edit')->middleware('contentadmin');
Route::delete('/products/{product}', 'ProductsController@destroy')->name('products.destroy')->middleware('contentadmin');
Route::put('/products/{product}', 'ProductsController@update')->name('products.update')->middleware('contentadmin');
Route::get('/products', 'ProductsController@index')->name('products.index')->middleware('contentadmin');
Route::get('/products/assign/{product}', 'ProductsController@select_shop')->name('products.select_shop')->middleware('contentadmin');
Route::put('/products/assign', 'ProductsController@assign_to')->name('products.assign')->middleware('contentadmin');
Route::post('/products/assign/{product}', 'ProductsController@assign_to')->name('products.assign')->middleware('contentadmin');

// SHOPS
Route::get('/shops', 'ShopsController@index')->name('shops.index')->middleware('copywriter');
Route::post('/shops', 'ShopsController@store')->name('shops.store')->middleware('administrator');
Route::get('/shops/create', 'ShopsController@create')->name('shops.create')->middleware('administrator');
Route::get('/shops/{shop}', 'ShopsController@edit')->name('shops.edit')->middleware('administrator');
Route::delete('/shops/{shop}', 'ShopsController@destroy')->name('shops.destroy')->middleware('administrator');
Route::put('/shops/{shop}', 'ShopsController@update')->name('shops.update')->middleware('administrator');
Route::get('/shop/{shop}/products', 'ShopsController@products')->name('shops.products')->middleware('copywriter');
Route::delete('/shop/product/{product}', 'ShopsController@destroy_product')->name('shops.destroy_product')->middleware('administrator');
Route::get('/shop/product/{product}', 'ShopsController@edit_product')->name('shops.edit_product')->middleware('copywriter');
Route::put('/shop/product/{product}', 'ShopsController@update_product')->name('shops.update_product')->middleware('copywriter');

// SETTINGS
Route::resource('/settings', 'SettingsController')->except('show')->middleware('administrator');


// AUTH
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/homelogout', 'HomelogoutController@index')->name('homelogout');
Route::post('/logmeout', 'Auth\LogoutController@logout')->name('logmeout');
