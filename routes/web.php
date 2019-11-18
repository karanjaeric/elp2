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

Route::get('/', function () {
    return view('admin.Login');

});
Route::resource('scholars', 'ScholarController');
Route::get('/calendar', function () {
    return view('admin.calendar');

});
Route::get('/scholar', function () {
    return view('admin.scholar');

});
Route::get('/reports', function () {
    return view('admin.reports');

});
Route::get('/scholars', 'ScholarController@index');
Route::get('/outline', 'ScholarController@dashboard');
Route::get('/home', 'ScholarController@dashboard');
Route::get('/summaries', function () {
    return view('admin.summaries');

});

Route::get('/register', function () {
    return view('admin.Register');

});
Route::get('/login', function () {
    return view('admin.Login');

});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
