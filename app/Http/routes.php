<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/home', 'HomeController@index');
Route::get('/', 'WelcomeController@index');
Route::get('/item', 'WelcomeController@item');

/** Category - Products */
Route::model('categories', 'Category');
Route::model('products', 'Products');
Route::bind('products', function($value) {return App\Products::where("slug",$value)->first();});
Route::bind('categories', function($value) {return App\Category::where("slug",$value)->first();});
Route::resource('categories', 'CategoryController');
Route::resource('categories.products', 'ProductController');
Route::get('/products', 'ProductController@index', ["as" => 'products.index']);

/** Order */
Route::model('order','App\Order');
Route::resource('order', 'OrderController');

/** Cart */
Route::controller('cart', 'CartController');

/** Auth */
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
