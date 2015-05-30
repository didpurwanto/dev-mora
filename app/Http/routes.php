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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/halo', function()
{
    return "Halo, bro";
});

// Route::get(‘/helloworld’, ‘HelloWorldController@index’);

/* Universities controller*/

// Route::get('univ', 'UniversitiesController@index');
// Route::get('univ/create', 'UniversitiesController@create');
// Route::get('univ/{id}', 'UniversitiesController@show');
// Route::post('univ','UniversitiesController@store');
// Route::post('univ/{id}/edit','UniversitiesController@edit');
Route::resource('universities','UniversitiesController');
Route::resource('departements','DepartementsController');
Route::resource('applicants','ApplicantsController');

Route::resource('families','FamiliesController');
