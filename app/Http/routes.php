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

Route::get('register', 'HomeController@index');

//auth
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

// Route::get(‘/helloworld’, ‘HelloWorldController@index’);

/* Universities controller*/

// Route::get('univ', 'UniversitiesController@index');
// Route::get('univ/create', 'UniversitiesController@create');
// Route::get('univ/{id}', 'UniversitiesController@show');
// Route::post('univ','UniversitiesController@store');
// Route::post('univ/{id}/edit','UniversitiesController@edit');

//Administrator route
Route::resource('universities','UniversitiesController');
Route::resource('departements','DepartementsController');

//applicant route
//Route::resource('applicants','ApplicantsController',['except' => ['index', 'show']]);
Route::get('applicants', 'ApplicantsController@create');
Route::post('applicants', 'ApplicantsController@store');
Route::get('applicants/{id}', 'ApplicantsController@edit');
Route::patch('applicants/{id}', 'ApplicantsController@update');

//Family Route
//Route::resource('families','FamiliesController',['except' => ['index', 'show']]);
Route::get('families/{id}', 'FamiliesController@edit');
Route::patch('families/{id}', 'FamiliesController@update');

//Pesantren Route
//Route::resource('pesantrens','PesantrensController',['except' => ['index', 'show', 'create']]);
Route::get('pesantrens/{id}', 'PesantrensController@edit');
Route::patch('pesantrens/{id}', 'PesantrensController@update');

//School Route
//Route::resource('schools','SchoolsController',['except' => ['index', 'show', 'create']]);
Route::get('schools/{id}', 'SchoolsController@edit');
Route::patch('schools/{id}', 'SchoolsController@update');

//Raports Route
//Route::resource('raports','RaportsController',['except' => ['index', 'show', 'create']]);
Route::get('raports/{id}', 'RaportsController@edit');
Route::patch('raports/{id}', 'RaportsController@update');

//Application Route
//Route::resource('applications','ApplicationsController',['except' => ['index', 'show', 'create']]);
Route::get('applications/{id}', 'ApplicationsController@edit');
Route::patch('applications/{id}', 'ApplicationsController@update');

/*
|
| Route for dynamic drop down kabupaten and kecamatan
| Henri
|
*/
Route::get('families/provinces/{id}', 'FamiliesController@getKabupatens');
Route::get('families/kabupatens/{id}', 'FamiliesController@getKecamatans');

/*
|
| Route for dynamic drop down departemen
|
*/
Route::get('applications/universities/{id}', 'ApplicationsController@getDepartements');


Route::get('upload','ApplicantsController@getUploadForm');	
Route::post('upload/image','ApplicantsController@postUpload');