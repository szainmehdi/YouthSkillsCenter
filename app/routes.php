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

|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', [ 'as' => 'home', 'uses' => 'HomeController@index']);
Route::get('/about', [ 'as' => 'about', 'uses' => 'HomeController@about']);
Route::get('/preschool', [ 'as' => 'preschool', 'uses' => 'HomeController@preschool']);
Route::get('/programs', [ 'as' => 'programs', 'uses' => 'HomeController@programs']);
Route::get('/privacy-policy', [ 'as' => 'privacy-policy', 'uses' => 'HomeController@privacyPolicy']);
Route::get('/school-age-care', [ 'as' => 'school-age-care', 'uses' => 'HomeController@schoolAgeCare']);
Route::get('/contact', [ 'as' => 'contact', 'uses' => 'HomeController@contact']);
Route::post('/contact', [ 'as' => 'contact-submit', 'uses' => 'HomeController@contactSubmit']);