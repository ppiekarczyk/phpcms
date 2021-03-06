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

Route::controller('users', 'UsersController');
Route::resource('pages', 'PagesController');
Route::controller('password', 'RemindersController');
Route::get('/', function(){
    return View::make('home.home');
});

Route::resource('websites', 'WebsitesController');
Route::resource('userpreferences', 'UserPreferencesController');