<?php

use Illuminate\Http\Request;

Use App\Listings;
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

//listings
Route::middleware('auth:api')->get('listings', 'ListingsController@index');
Route::middleware('auth:api')->get('listings/{id}', 'ListingsController@show');
Route::middleware('auth:api')->post('listings', 'ListingsController@store');
Route::middleware('auth:api')->put('listings/{id}', 'ListingsController@update');
Route::middleware('auth:api')->delete('listings/{id}', 'ListingsController@delete');

//listings categories
Route::middleware('auth:api')->get('category_listings', 'CategoryListingsController@index');
Route::middleware('auth:api')->get('category_listings/{id}', 'CategoryListingsController@show');
Route::middleware('auth:api')->post('category_listings', 'CategoryListingsController@store');
Route::middleware('auth:api')->put('category_listings/{id}', 'CategoryListingsController@update');
Route::middleware('auth:api')->delete('category_listings/{id}', 'CategoryListingsController@delete');

//category descriptions
Route::middleware('auth:api')->get('category_desc', 'CategoryDescriptionController@index');
Route::middleware('auth:api')->get('category_desc/{id}', 'CategoryDescriptionController@show');
Route::middleware('auth:api')->post('category_desc', 'CategoryDescriptionController@store');
Route::middleware('auth:api')->put('category_desc/{id}', 'CategoryDescriptionController@update');
Route::middleware('auth:api')->delete('category_desc/{id}', 'CategoryDescriptionController@delete');

//users of the listings
Route::middleware('auth:api')->get('users', 'UsersListingsController@index');
Route::middleware('auth:api')->get('users/{id}', 'UsersListingsController@show');
Route::middleware('auth:api')->post('users', 'UsersListingsController@store');
Route::middleware('auth:api')->put('users/{id}', 'UsersListingsController@update');
Route::middleware('auth:api')->delete('users/{id}', 'UsersListingsController@delete');

