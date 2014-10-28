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
use YouthSkillsCenter\Auth\User;
use YouthSkillsCenter\Auth\UserValidator;
use YouthSkillsCenter\Billing\BillingInterface;
use YouthSkillsCenter\Billing\StripeBilling;
use YouthSkillsCenter\Families\Family;

Route::get('/', [ 'as' => 'home', 'uses' => 'HomeController@index']);
Route::get('about', [ 'as' => 'about', 'uses' => 'HomeController@about']);
Route::get('preschool', [ 'as' => 'preschool', 'uses' => 'HomeController@preschool']);
Route::get('programs', [ 'as' => 'programs', 'uses' => 'HomeController@programs']);
Route::get('privacy-policy', [ 'as' => 'privacy-policy', 'uses' => 'HomeController@privacyPolicy']);
Route::get('school-age-care', [ 'as' => 'school-age-care', 'uses' => 'HomeController@schoolAgeCare']);
Route::get('frequently-asked-questions', [ 'as' => 'faqs', 'uses' => 'HomeController@faqs']);
Route::get('contact', [ 'as' => 'contact', 'uses' => 'HomeController@contact']);
Route::post('contact/submit', [ 'as' => 'contact-submit', 'uses' => 'HomeController@contactSubmit']);

Route::group(['prefix'=>'myYSC', 'before' => 'auth'], function () {
    Route::get('/', ['as' => 'users.home', 'uses' => 'MyYscController@index']);
    Route::get('/profile', ['as' => 'users.profile', 'uses' => 'MyYscController@profile']);
    Route::post('/profile', ['as' => 'users.updateProfile', 'uses' => 'MyYscController@updateProfile']);
    Route::get('/billing', ['as' => 'users.billing', 'uses' => 'MyYscController@billing']);
    Route::post('/update-card', ['as' => 'users.updateCard', 'uses' => 'MyYscController@updateCard']);

    Route::group(['prefix' => 'manage'], function () {
        Route::get('/', ['as' => 'users.manage.home', 'uses' => 'MyYscController@manage']);
        Route::get('families', ['as' => 'manage.families', 'uses' => 'MyYscController@families']);

        Route::get('families/create', ['as' => 'manage.families.create', 'uses' => 'MyYscController@createFamily']);
        Route::post('families/create', ['as' => 'manage.families.doCreate', 'uses' => 'MyYscController@doCreateFamily']);

        Route::get('families/{id}', ['as' => 'manage.families.view', 'uses' => 'MyYscController@showFamily']);
        Route::get('families/{id}/edit', ['as' => 'manage.families.edit', 'uses' => 'MyYscController@editFamily']);
        Route::post('families/{id}/edit', ['as' => 'manage.families.doEdit', 'uses' => 'MyYscController@doEditFamily']);

        Route::get('families/{id}/add-child', ['as' => 'manage.families.addChild', 'uses' => 'MyYscController@addChild']);
        Route::post('families/{id}/add-child', ['as' => 'manage.families.doAddChild', 'uses' => 'MyYscController@doAddChild']);
    });
});
Route::get('/sitemap', [ 'as' => 'sitemap' , 'uses' => function () {

    /** @var Sitemap $sitemap */
    $sitemap = App::make("sitemap");

    $sitemap->add(URL::route('home'), '2014-10-12T20:10:00+02:00', '1.0', 'monthly');
    $sitemap->add(URL::route('preschool'), '2014-10-12T12:30:00+02:00', '0.9', 'monthly');
    $sitemap->add(URL::route('school-age-care'), '2014-10-12T12:30:00+02:00', '0.9', 'monthly');
    $sitemap->add(URL::route('faqs'), '2014-10-18T12:30:00+02:00', '0.9', 'monthly');
    $sitemap->add(URL::route('programs'), '2014-10-12T12:30:00+02:00', '0.9', 'monthly');
    $sitemap->add(URL::route('about'), '2014-10-12T12:30:00+02:00', '0.7', 'monthly');
    $sitemap->add(URL::route('contact'), '2014-10-12T12:30:00+02:00', '0.7', 'monthly');
    $sitemap->add(URL::route('privacy-policy'), '2014-10-12T12:30:00+02:00', '0.3', 'monthly');

    return $sitemap->render('xml');
}]);//

// Confide routes
Route::get('users/create', 'UsersController@create');
Route::get('myYSC/signup', ['as' => 'users.signup', 'uses' => 'UsersController@create']);
Route::post('users', 'UsersController@store');
Route::get('users/login', 'UsersController@login');
Route::get('myYSC/login', ['as' => 'users.login', 'uses' => 'UsersController@login']);
Route::post('users/login', 'UsersController@doLogin');
Route::get('users/confirm/{code}', 'UsersController@confirm');
Route::get('users/forgot_password', 'UsersController@forgotPassword');
Route::post('users/forgot_password', 'UsersController@doForgotPassword');
Route::get('users/reset_password/{token}', 'UsersController@resetPassword');
Route::post('users/reset_password', 'UsersController@doResetPassword');
Route::get('users/logout', 'UsersController@logout');
Route::get('myYSC/logout',['as' => 'users.logout', 'uses' =>  'UsersController@logout']);