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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');







Route::post('/insert', 'TreatmentController@AddNewTreatment');
Route::get('/load/{type?}/{startDate?}/{endDate?}', 'TreatmentController@LoadData');
Route::get('/search/{selector?}/{value?}/{like?}', 'TreatmentController@SearchData');
Route::get('/calculator', 'TreatmentController@calc');
Route::get('/u/{id}', 'TreatmentController@userINFO');








