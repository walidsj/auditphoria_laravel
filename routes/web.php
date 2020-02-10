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

Route::get('/', 'WelcomeController@index')->name('welcome');
Auth::routes();
//Auth::routes(['verify' => true]); kl mau verification 
Route::get('/home', 'HomeController@index')->name('home'); //->middleware('verified');

//iPAPER
Route::post('/update-datadiri', 'PaperController@update_datadiri')->name('update_datadiri');
Route::post('/upload-paper', 'PaperController@upload_paper')->name('upload_paper');
Route::post('/upload-transaction', 'PaperController@upload_transaction')->name('upload_transaction');

//iAUDIT

//Umum
Route::post('/finalizing-paper', 'PaperController@finalizing_paper')->name('finalizing_paper');

//LOMBA
Route::get('/lomba-call-for-paper', 'LombaController@cfp')->name('lomba_cfp');
Route::get('/lomba-audit', 'LombaController@audit')->name('lomba_audit');
