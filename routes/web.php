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
    
// })->name('welcome');
Route::get('/', 'AdController@liste')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/annonce', 'AdController@create')->name('ad.create');
Route::post('/annonce/create', 'AdController@store')->name('ad.store');
Route::get('/liste', 'AdController@liste')->name('ap.liste');
//admin//
Route::namespace('admin')->group(function(){
    Route::get('/admin/login', 'Auth\LoginController@showLoginform')->name('admin.login');
    Route::post('/admin/login','Auth\LoginController@login');
       
});








