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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profil', 'HomeController@profil')->name('home');
Route::get('/controller', 'HomeController@controller')->name('home');

route::get('/text','text@select');
route::get('/omar','ww@omar');
route::post('/insert','ww@insert');
route::get('/delete/{id}','ww@delete');
route::get('ed/{id}/edit','ww@edit');
route::post('ed/{id}/update','ww@update');

route::get('/show','ww@show');
