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

Route::post('/usermeeting','DisplayController@usermeeting');
Route::get('/home','DisplayController@dashboard');
Route::get('/members','DisplayController@members');
Route::get('/', function () {return view('techhub.home');});
//Route::post('/user', 'Auth\RegisterController@');
Auth::routes();
//Route::resource('/meeting','MeetingController');
Route::resource('/material','MaterialController');
Route::get('/meeting','MeetingController@index');
Route::group(['middleware'=>'admin'],function(){
    Route::get('/meeting/create','MeetingController@create');
    Route::post('/meeting','MeetingController@store');
    Route::get('/meeting/{meeting}/edit','MeetingController@edit');
    Route::get('/attendees/export/{meeting}', 'MeetingController@export');
});
