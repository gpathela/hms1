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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/admin', 'HomeController@admin')->middleware('auth','admin');
Route::get('/doctor', 'HomeController@doctor')->middleware('auth','doctor');
Route::get('/nurse', 'HomeController@nurse')->middleware('auth','nurse');
Route::get('/patient', 'HomeController@patient')->middleware('auth','patient');
Route::get('/it', 'HomeController@it')->middleware('auth','it');
Route::get('/reception', 'HomeController@reception')->middleware('auth','reception');
//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/record/create/{id}', 'RecordController@create')->middleware('auth','admin');
Route::get('/admin/logs/create/{id}', 'LogController@create')->middleware('auth','admin');
Route::get('/admin/doctors', 'EmployeeController@doctors')->middleware('auth','admin');
Route::get('/admin/nurses', 'EmployeeController@nurses')->middleware('auth','admin');
Route::resource('/admin/employee', 'EmployeeController')->middleware('auth','admin');
Route::resource('/admin/patient', 'PatientController')->middleware('auth','admin');
Route::resource('/admin/record', 'RecordController')->middleware('auth','admin');
Route::resource('/admin/logs', 'LogController')->middleware('auth','admin');

