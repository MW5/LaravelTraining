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

Route::get('/', 'pagesController@home');

Route::get('cats', 'catListController@cats');
Route::get('cats/{cat}', 'catListController@show');
//it passes the wildcard as an argument to the controller

Route::get('about', 'pagesController@about');
