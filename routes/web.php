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
Route::post('/categories/store', 'CategoriesController@store') ->name('category.store');
Route::delete('/categories/{id}', 'CategoriesController@destroy') ->name('category.destroy');

Route::resource('profile', 'ProfilesController');
Route::get('/profile/reset/{id}/edit', 'ProfilesController@reset')->name("profile.pwupdate");
Route::put('/profile/reset/{id}', 'ProfilesController@pwdupdate')->name("profile.newPw");
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

Route::get('/home', 'AdminController@index')->name('home');

Route::get('/admin/users', 'AdminController@users');
Route::get('/admin/posts', 'AdminController@posts')->name('admin.posts');
Route::get('/admin/users/edit/{id}', 'AdminController@editUser');
Route::patch('/admin/users/edit/{id}', 'UserController@update');
Route::put('/admin/users/edit/{id}', 'UserController@password');
Route::get('/admin/users/delete/{id}', 'UserController@destroy');

Route::get('/admin/post/edit/{id}', 'AdminController@edit');
Route::get('/admin/posts/add', 'AdminController@addpost');
Route::get('/admin/categories/add', 'AdminController@addcategory');

Route::post('/reminder/create', 'ReminderController@store');
Route::get('/reminder/edit/{id}', 'ReminderController@edit');
Route::get('/reminder/delete/{id}', 'ReminderController@destroy');
Route::patch('/reminder/update/{id}', 'ReminderController@update');

Route::get('/admin/theme', 'AdminController@theme');
