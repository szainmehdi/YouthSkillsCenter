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

use Roumen\Sitemap\Sitemap;

Route::get('/', [ 'as' => 'home', 'uses' => 'HomeController@index']);
Route::get('/about', [ 'as' => 'about', 'uses' => 'HomeController@about']);
Route::get('/preschool', [ 'as' => 'preschool', 'uses' => 'HomeController@preschool']);
Route::get('/programs', [ 'as' => 'programs', 'uses' => 'HomeController@programs']);
Route::get('/privacy-policy', [ 'as' => 'privacy-policy', 'uses' => 'HomeController@privacyPolicy']);
Route::get('/school-age-care', [ 'as' => 'school-age-care', 'uses' => 'HomeController@schoolAgeCare']);
Route::get('/contact', [ 'as' => 'contact', 'uses' => 'HomeController@contact']);
Route::post('/contact', [ 'as' => 'contact-submit', 'uses' => 'HomeController@contactSubmit']);

Route::get('/sitemap', [ 'as' => 'sitemap' , 'uses' => function () {

    /** @var Sitemap $sitemap */
    $sitemap = App::make("sitemap");

    $sitemap->add(URL::route('home'), '2014-10-12T20:10:00+02:00', '1.0', 'monthly');
    $sitemap->add(URL::route('preschool'), '2014-10-12T12:30:00+02:00', '0.9', 'monthly');
    $sitemap->add(URL::route('school-age-care'), '2014-10-12T12:30:00+02:00', '0.9', 'monthly');
    $sitemap->add(URL::route('programs'), '2014-10-12T12:30:00+02:00', '0.9', 'monthly');
    $sitemap->add(URL::route('about'), '2014-10-12T12:30:00+02:00', '0.7', 'monthly');
    $sitemap->add(URL::route('contact'), '2014-10-12T12:30:00+02:00', '0.7', 'monthly');
    $sitemap->add(URL::route('privacy-policy'), '2014-10-12T12:30:00+02:00', '0.3', 'monthly');

    return $sitemap->render('xml');
}]);