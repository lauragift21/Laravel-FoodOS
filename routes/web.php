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

Route::resource('admin', "Admin\AdminController");
Route::resource('/product', "Admin\ProductController");

// Route::group(['prefix'=> 'admin'], function(){

// });


Route::resource('restaurant', 'RestaurantController');
// Route::get('cart/{id}', 'RestaurantController@show');
// Route::resource('product', 'ProductController');

Route::get('/add-to-cart/{id}', ['uses'=>'ProductController@addToCart', 'as' =>'product.addToCart']
	);
 

Route::get('/home', 'WelcomeController@index');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
