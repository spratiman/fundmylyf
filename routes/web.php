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

Route::get('/', 'PublicController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/insurance-aid', 'QuestioniarController@index')->name('questioniar');
Route::post('/questioniar/save', 'QuestioniarController@save')->name('questioniar.save');
Route::get('/questioniar/{id}', 'QuestioniarController@show')->name('questioniar.view');
