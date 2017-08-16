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
Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'HomeController@showProfile')->name('profile');
Route::get('/logout','Auth\LoginController@logout')->name('logout');
Route::get('/clients','HomeController@listAllClients')->name('showClients');
Route::get('/payments','HomeController@listAllTransactions')->name('showPayments');
Route::get('/btypes','HomeController@listAllBusinessTypes')->name('showBussinessTypes');
