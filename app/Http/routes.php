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
Route::get('detiljurusan', 'ApplicationsController@jurusan');


/*
|--------------------------------------------------------------------------------------------
| APPLICANT ROUTE
| ALL ROUTE PROTECTED By 'AUTH' MIDDLEWARE (Pleasec check if protected or doesn't)
| It is place on method __construct on every controller.
*/

Route::get('applicanthome', 'HomeController@index');
//Route::post('applicanthome', ['middleware' => 'auth', 'uses' =>'HomeController@index']);

//auth
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('applicants', 'ApplicantsController@edit');
Route::patch('applicants', 'ApplicantsController@update');

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
/*
| Route for dynamic drop down departemen
*/
Route::get('applications/universities/{id}', 'ApplicationsController@getDepartements');

//Summary Route
Route::get('summary', 'SummaryController@index');

// finalisasi data bagi pendaftar
Route::get('finalisasi','SummaryController@finalisasi');

//Summary Route
Route::get('prints', ['middleware' => 'isfinish', 'uses' =>'SummaryController@cetak']);

// cetak bagi pendaftar
Route::get('cetakformulir','SummaryController@cetakFormulir');
Route::get('cetakkartu','SummaryController@cetakKartu');


/*
| -------------------------------------------------------------------------------------------
| ADMIN ROUTE
| ALL ROUTE PROTECTED By 'AUTH' and 'ADMIN' MIDDLEWARE (Pleasec check if protected or doesn't)
| It is place on method __construct on every controller.
|*

/*
|
| Route for dynamic drop down kabupaten and kecamatan
| Henri
| NOT USED FOR WHILE
*/
//Route::get('families/provinces/{id}', 'FamiliesController@getKabupatens');
//Route::get('families/kabupatens/{id}', 'FamiliesController@getKecamatans');

//Route::get('upload','ApplicantsController@getUploadForm');
//Route::post('upload/image','ApplicantsController@postUpload');

/*
|
| Route for dynamic drop down departemen
| Agung
|
*/

//Route::get('users', 'UserController@index');
//Route::get('users/create', 'UserController@create');
//Route::post('users', 'UserController@store');

// Admin route
Route::get('admin', [
	'uses' => 'AdminController@index',
	'as' => 'admin',
	'middleware' => 'admin'
]);

Route::get('admin/changepassword', 'Auth\ChangePasswordsController@edit');
Route::post('admin/changepassword', 'Auth\ChangePasswordsController@update');

// User route resourcefull
Route::resource('admin/users','UsersController',['except' => ['show']]);

//Route::get('admin', 'AdminController@index');
//Route::get('report/univ', 'AdminController@univlist');

//Administrator route
// Route::get('admin/listuniversities/{id}','AdminController@departementlist');
Route::get('admin/export','ExportImportController@exportapplicants');
Route::get('admin/import','ExportImportController@importtestnumber');
Route::post('admin/upload','ExportImportController@uploadtestnumber');
Route::get('admin/afterimport','ExportImportController@afterimporttestnumber');

Route::post('admin/listdepartement','AdminController@departementlist2');
Route::get('admin/listuniversities/','AdminController@departementlist');
Route::get('admin/listprovinces','AdminController@listprovinces');
Route::get('admin/pesantren','AdminController@pesantren');

Route::resource('admin/universities','UniversitiesController',['except' => ['show']]); // seharusnya method 'show' tidak ada
Route::resource('admin/departements','DepartementsController',['except' => ['show']]); // seharusnya method 'show' tidak ada
Route::resource('admin/programstudies','ProgramStudiesController',['except' => ['show']]); // seharusnya method 'show' tidak ada
Route::resource('admin/provinces','ProvincesController',['except' => ['show']]);

// Route::get('admin/listuniversities','AdminController@listuniversities');
Route::resource('admin/educationlevels','EducationLevelController',['except' => ['show']]);
Route::resource('admin/jobtypes','JobTypesController',['except' => ['show']]);
Route::resource('admin/pesantrentypes','PesantrenTypesController',['except' => ['show']]);
Route::resource('admin/rangesalaries','RangeSalariesController',['except' => ['show']]);
Route::resource('admin/schooltypes','SchoolTypesController',['except' => ['show']]);

//Route::resource('admin/tahunlahir','BornYearsController',['except' => ['show','create','destroy']]);
Route::resource('admin/tahunlulus','GraduateYearsController',['except' => ['show','create','destroy']]);

Route::get('admin/pendaftaran/{id}','AdminController@pendaftaran');
Route::patch('admin/pendaftaran/{id}','AdminController@pendaftaranupdate');

Route::get('admin/departementlist','AdminController@departementlist');
Route::get('admin/DownloadProvince','AdminController@list_provinces_excel');
Route::get('admin/DonwloadPesantren','AdminController@list_pesantren_excel');
Route::post('admin/DonwloadDepartement','AdminController@list_departement_excel');
