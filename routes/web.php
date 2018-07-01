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


Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::resource('articles', 'ArticlesController');
Route::get('/categories/{id}', 'CategoriesController@show');

Route::resource('profile', 'ProfilesController');
Route::get('/profile/reset/{id}/edit', 'ProfilesController@reset');
Route::put('/profile/reset/{id}', 'ProfilesController@pwdupdate');
Route::get('/orders', 'ProfilesController@orders');
Route::get('/shoppingCart', 'ArticlesController@getCart');

Route::get('/reduce/{id}', [
  'uses' => 'ArticlesController@reduceByOne',
  'as' => 'article.reduceByOne'
]);

Route::get('/remove/{id}', 'ArticlesController@removeItem');

Route::get('/add-to-card/{id}',[
  'uses' => 'ArticlesController@addToCard',
  'as' => 'product.addToCard'
]);

Route::get('/shoppingCart/checkout', 'ArticlesController@getCheckout');
Route::post('/shoppingCart/checkout','ArticlesController@storeOrder');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
