<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'baseController@index');

//Route::get('/pages', 'PagesController@index');
//Route::get('/pages/{slug}', 'PagesController@slug');
//Route::get('/pages/create', 'PagesController@create');

Route::resource('pages', 'PagesController');
