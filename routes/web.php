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