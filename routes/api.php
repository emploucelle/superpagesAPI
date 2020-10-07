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

//States
Route::middleware('auth:api')->get('states', 'StatesController@index');
Route::middleware('auth:api')->get('states/{id}', 'StatesController@show');
Route::middleware('auth:api')->post('states', 'StatesController@store');
Route::middleware('auth:api')->put('states/{id}', 'StatesController@update');
Route::middleware('auth:api')->delete('states/{id}', 'StatesController@delete');

//Cities
Route::middleware('auth:api')->get('cities', 'CitiesController@index');
Route::middleware('auth:api')->get('cities/{id}', 'CitiesController@show');
Route::middleware('auth:api')->post('cities', 'CitiesController@store');
Route::middleware('auth:api')->put('cities/{id}', 'CitiesController@update');
Route::middleware('auth:api')->delete('cities/{id}', 'CitiesController@delete');

//Listing working hours
Route::middleware('auth:api')->get('listing_workinghours', 'ListingworkinghoursController@index');
Route::middleware('auth:api')->get('listing_workinghours/{id}', 'ListingworkinghoursController@show');
Route::middleware('auth:api')->post('listing_workinghours', 'ListingworkinghoursController@store');
Route::middleware('auth:api')->put('listing_workinghours/{id}', 'ListingworkinghoursController@update');
Route::middleware('auth:api')->delete('listing_workinghours/{id}', 'ListingworkinghoursController@delete');

//Listing pays
Route::middleware('auth:api')->get('listing_pays', 'ListingpaysController@index');
Route::middleware('auth:api')->get('listing_pays/{id}', 'ListingpaysController@show');
Route::middleware('auth:api')->post('listing_pays', 'ListingpaysController@store');
Route::middleware('auth:api')->put('listing_pays/{id}', 'ListingpaysController@update');
Route::middleware('auth:api')->delete('listing_pays/{id}', 'ListingpaysController@delete');

//Listing images
Route::middleware('auth:api')->get('listing_images', 'ListingimagesController@index');
Route::middleware('auth:api')->get('listing_images/{id}', 'ListingimagesController@show');
Route::middleware('auth:api')->post('listing_images', 'ListingimagesController@store');
Route::middleware('auth:api')->put('listing_images/{id}', 'ListingimagesController@update');
Route::middleware('auth:api')->delete('listing_images/{id}', 'ListingimagesController@delete');

//Listing payments
Route::middleware('auth:api')->get('listing_payments', 'ListingpaymentsController@index');
Route::middleware('auth:api')->get('listing_payments/{id}', 'ListingpaymentsController@show');
Route::middleware('auth:api')->post('listing_payments', 'ListingpaymentsController@store');
Route::middleware('auth:api')->put('listing_payments/{id}', 'ListingpaymentsController@update');
Route::middleware('auth:api')->delete('listing_payments/{id}', 'ListingpaymentsController@delete');


