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
    return view('admin.dashboard');

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
Route::get('/outline', function () {
    return view('admin.dashboard');

});
Route::get('/summaries', function () {
    return view('admin.summaries');

});

