<?php

use Illuminate\Http\Request;
use App\Article;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');

    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');
    });
});


Route::group([
  'middleware' => 'auth:api'
], function() {
  //Profile Routes
  Route::put('profile', 'ProfilesController@eUpdate');

  //narudzbe
  Route::get('orders', 'ProfilesController@eOrders');
  Route::post('orders', 'ArticlesController@storeOrderApi');
});

//Categories routes
Route::get('categories/{id}','CategoriesController@eShow');

//Articles routes
Route::get('articles', 'ArticlesController@eIndex');
Route::get('categories', 'CategoriesController@eIndex');
Route::get('articles/{id}', 'ArticlesController@eShow');
Route::post('articles/{id}', 'ArticlesController@eStore');
