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

Route::get('applicanthome', ['middleware' => 'auth', 'uses' =>'HomeController@index']);
Route::post('applicanthome', ['middleware' => 'auth', 'uses' =>'HomeController@index']);

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
Route::resource('universities','UniversitiesController',['except' => ['show']]); // seharusnya method 'show' tidak ada
Route::resource('departements','DepartementsController',['except' => ['show']]); // seharusnya method 'show' tidak ada
Route::resource('programstudies','ProgramStudiesController',['except' => ['show']]); // seharusnya method 'show' tidak ada

//applicant route
//Route::resource('applicants','ApplicantsController',['except' => ['index', 'show']]);
Route::get('applicants', 'ApplicantsController@create');
Route::post('applicants', 'ApplicantsController@store');
Route::get('applicants/edit', 'ApplicantsController@edit');
Route::patch('applicants/edit', 'ApplicantsController@update');

//Family Route
//Route::resource('families','FamiliesController',['except' => ['index', 'show']]);
Route::get('families', 'FamiliesController@edit');
Route::patch('families', 'FamiliesController@update');

//Pesantren Route
//Route::resource('pesantrens','PesantrensController',['except' => ['index', 'show', 'create']]);
Route::get('pesantrens', 'PesantrensController@edit');
Route::patch('pesantrens', 'PesantrensController@update');

//School Route
//Route::resource('schools','SchoolsController',['except' => ['index', 'show', 'create']]);
Route::get('schools', 'SchoolsController@edit');
Route::patch('schools', 'SchoolsController@update');

//Raports Route
//Route::resource('raports','RaportsController',['except' => ['index', 'show', 'create']]);
Route::get('raports', 'RaportsController@edit');
Route::patch('raports', 'RaportsController@update');

//Application Route
//Route::resource('applications','ApplicationsController',['except' => ['index', 'show', 'create']]);
Route::get('applications', 'ApplicationsController@edit');
Route::patch('applications', 'ApplicationsController@update');


//Summary Route
Route::get('summary', 'SummaryController@index');
//Summary Route
Route::get('prints', 'SummaryController@cetak');

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


Route::get('cetakformulir','SummaryController@cetakFormulir');
Route::get('cetakkartu','SummaryController@cetakKartu');

/*
|
| Route for dynamic drop down departemen
| Agung
|
*/

Route::get('users', 'UserController@index');
Route::get('users/create', 'UserController@create');
Route::post('users', 'UserController@store');

Route::get('admin', 'AdminController@index');
