<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
//     // return view('welcome');
// });

Route::get('/', function () {
    return view('welcome');
    // return view('welcome');
});

Auth::routes();

Route::get('/listjob', 'ListjobController@index')->name('listjob');
Route::get('/listjob/add', 'ListjobController@add');
Route::post('/listjob/store', 'ListjobController@store');


Route::get('/login/translator', 'Auth\LoginController@showTranslatorLoginForm');
Route::get('/register/translator', 'Auth\RegisterController@showTranslatorRegisterForm');

Route::post('/login/translator', 'Auth\LoginController@translatorLogin');
Route::post('/register/translator', 'Auth\RegisterController@createTranslator');
    
Route::get('/login/personal', 'Auth\LoginController@showPersonalLoginForm');
Route::get('/register/personal', 'Auth\RegisterController@showPersonalRegisterForm');

Route::post('/login/personal', 'Auth\LoginController@personalLogin');
Route::post('/register/personal', 'Auth\RegisterController@createPersonal');

Route::get('/login/company', 'Auth\LoginController@showCompanyLoginForm');
Route::get('/register/company', 'Auth\RegisterController@showCompanyRegisterForm');

Route::post('/login/company', 'Auth\LoginController@companyLogin');
Route::post('/register/company', 'Auth\RegisterController@createCompany');

Route::view('/home', 'home')->middleware('auth');
Route::view('/translator', 'translator');
Route::view('/personal', 'personal');
Route::view('/company', 'company');