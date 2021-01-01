<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::post('/login', 'App\Http\Controllers\AuthController@login');

Route::middleware(['auth:sanctum'])->group(function () {

		// EVENTS
	  Route::get('/events/get', 'App\Http\Controllers\EventController@read');
	  Route::get('/events/get/{id}', 'App\Http\Controllers\EventController@read');

	  	// TICKETS
	  Route::get('/tickets/get/{document}', 'App\Http\Controllers\TicketController@read');
	  Route::post('/tickets/post', 'App\Http\Controllers\TicketController@create');
	  	
	  	// CUSTOMERS
	  Route::get('/customers/get/{document}', 'App\Http\Controllers\CustomerController@read');

});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
