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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'LoginController@logout');

Route::get('/all_logs', 'LogController@all');

Route::get('/create_project', 'ProjectController@create');

Route::post('/store/project',[
    'as'=> 'store.project',
    'uses'=> 'ProjectController@store'
  ]);