<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});



Route::resource('contacts', 'ContactsController');
Route::post('/contact/search', array('as' => 'contactSearch', 'uses' => 'ContactsController@show'));

//------------------Product Routes
Route::resource('product', 'ProducersController');
Route::resource('productCat', 'ProductCatsController');



//------------------End Product Routes



//---------------Image Routes
Route::resource('imager', 'ImagersController');

//---------------End Image Routes


//------------------Venue Routes
Route::resource('venue', 'VenuesController');


//------------------End Venue Routes


//------------------Show Routes
Route::resource('show', 'ShowsController');


//------------------End Show Routes