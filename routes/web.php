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

/*
Route::get('/listjob', 'ListjobController@index')->name('listjob');
Route::get('/listjob/add', 'ListjobController@add');
Route::post('/listjob/store', 'ListjobController@store');

Route::get('job/hapus/{id}', 'ListjobController@delete');
Route::get('/viewjob/{id}', 'ListjobController@show_detail')->name('viewjob');
*/

Route::get('/Personal', 'PersonalController@index')->name('listjobpersonal');
Route::get('/Personal/add', 'PersonalController@add');
Route::post('/Personal/store', 'PersonalController@store');
Route::get('job/hapus/{id}', 'PersonalController@delete');
Route::get('/viewjobpersonal/{id}', 'PersonalController@show_detail')->name('viewjobpersonal');

Route::get('/Company', 'CompanyController@index')->name('listjobcompany');
Route::get('/Company/add', 'CompanyController@add');
Route::post('/Company/store', 'CompanyController@store');
Route::get('job/hapus/{id}', 'CompanyController@delete');
Route::get('/viewjobcompany/{id}', 'CompanyController@show_detail')->name('viewjobcompany');

Route::get('/Translator', 'TranslatorController@index')->name('listjobtranslator');
Route::get('/Translator/add', 'TranslatorController@add');
Route::post('/Translator/store', 'TranslatorController@store');
Route::get('job/hapus/{id}', 'TranslatorController@delete');
Route::get('/viewjobtranslator/{id}', 'TranslatorController@show_detail')->name('viewjobtranslator');

Route::get('/aktivitas','UserController@show')->name('aktivitas');

Route::view('/home', 'home')->middleware('auth');