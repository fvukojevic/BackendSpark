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


Route::get('/', 'PagesController@index')->name("pages.index");
Route::get('/about', 'PagesController@about')->name("pages.about");
Route::get('/services', 'PagesController@services')->name("pages.services");

Route::resource('articles', 'ArticlesController');
Route::get('/categories/{id}', 'CategoriesController@show')->name("category.show");

Route::resource('profile', 'ProfilesController');
Route::get('/profile/reset/{id}/edit', 'ProfilesController@reset')->name("profile.pwupdate");
Route::put('/profile/reset/{id}', 'ProfilesController@pwdupdate');
Route::get('/orders', 'ProfilesController@orders')->name("profile.orders");
Route::get('/shoppingCart', 'ArticlesController@getCart')->name("profile.card");

Route::get('/reduce/{id}', [
  'uses' => 'ArticlesController@reduceByOne',
  'as' => 'article.reduceByOne'
]);

Route::get('/remove/{id}', 'ArticlesController@removeItem')->name("article.removeItem");

Route::get('/add-to-card/{id}',[
  'uses' => 'ArticlesController@addToCard',
  'as' => 'product.addToCard'
]);

Route::get('/shoppingCart/checkout', 'ArticlesController@getCheckout')->name("card.checkout");
Route::post('/shoppingCart/checkout','ArticlesController@storeOrder')->name("articles.storeOrder");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
