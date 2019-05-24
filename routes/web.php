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

Route::get('/listjob', 'PersonalController@index')->name('listjob');
Route::get('/listjob/add', 'PersonalController@add');
Route::post('/listjob/store', 'PersonalController@store');

Route::get('job/hapus/{id}', 'PersonalController@delete');
Route::get('/viewjob/{id}', 'PersonalController@show_detail')->name('viewjob');

Route::get('/aktivitas','UserController@show')->name('aktivitas');

Route::view('/home', 'home')->middleware('auth');