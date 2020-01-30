<?php

use App\Http\Controllers\ScholarController;

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
/*Adds a user to the user_meeting table*/
Route::post('/usermeeting','DisplayController@usermeeting');
/*Loads the landing page with the required resources*/
Route::get('/home','DisplayController@dashboard');
/*Loads the members page with the required resources*/
Route::get('/members','DisplayController@members');
/*Returns the homepage*/
Route::get('/', function () {return view('techhub.home');});
//Route::post('/user', 'Auth\RegisterController@');
/*Has the routes from the Create new user and login pages*/
Auth::routes();
//Route::resource('/meeting','MeetingController');
/*Hosts the CRUD operations from the Material ResourceBundle*/
Route::resource('/material','MaterialController');
/*Loads up the meeting resource*/
Route::get('/meeting','MeetingController@index');
/*Hosts admin functions middleware resources*/
Route::group(['middleware'=>'admin'],function(){
  Route::get('/meeting/create','MeetingController@create');
  Route::post('/meeting','MeetingController@store');
  Route::get('/meeting/{meeting}/edit','MeetingController@edit');
  Route::get('/attendees/export/{meeting}', 'MeetingController@export');
});
