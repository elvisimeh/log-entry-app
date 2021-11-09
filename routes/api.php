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
| is assigned the "api" middleware . Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/login', 'LoginController@login');


Route::middleware('auth:api')->group(function () {
    Route::post('log', 'LogController@create');
    
    Route::post('register', 'RegisterController@create');

    Route::get('all_severity', 'SeverityController@all_severity');

    Route::get('all_project', 'ProjectController@all_projecty');
    });
    
    