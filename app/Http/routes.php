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

Route::group(['middleware' => 'beforeFilter'], function () {
	//HOME ROUTE
	Route::get('/', ['as'=>'home_index', 'uses' => 'HomeController@getHomepage']);
	Route::post('/purchace_request', ['uses'=>'HomeController@postPurchaceRequest']);

});