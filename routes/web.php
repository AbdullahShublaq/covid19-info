<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'CoronaController@index');
Route::get('/statistics', 'CoronaController@statistics');
Route::get('/chart', 'CoronaController@chart');
Route::get('/subscribe', 'CoronaController@subscribe');
Route::get('/vaccines', 'CoronaController@vaccines');
Route::get('/FAQs', 'CoronaController@faq');

Route::post('/subscribe', 'FirebaseController@storeSubscribe');
Route::post('/send_message', 'FirebaseController@send_message');


Auth::routes(['register'=>FALSE, 'reset'=>FALSE]);

Route::get('/home', 'HomeController@index')->name('home');
