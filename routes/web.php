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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//navigate to home
Route::get('/home', 'HomeController@index')->name('home');
//navigate to welcome
Route::get('/welcome', 'HomeController@second')->name('welcome');
//naviagate to edit list of quotes
Route::get('tvshows/editlist', 'ShowController@editlist');
//navigate to delete list of quotes
Route::get('tvshows/deletelist', 'ShowController@deletelist');
//access controller for tv show quotes
Route::resource('/tvshows', 'ShowController');
//ap_copi table testing controller
Route::resource('/copi', 'ApCopiController');
