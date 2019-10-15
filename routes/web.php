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
    return view('welcome');
});

Route::get('/kontak','kontakController@index')->name('home');
Route::get('/kontak/create','kontakController@new')->name('newForm');
Route::post('/kontak/create', 'kontakController@add')->name("addKontak");

Route::get('kontak/{id}/edit','kontakController@edit')->name('editKontak');
Route::post('kontak/{id}/edit', 'kontakController@update')->name('updateKontak');

Route::get('kontak/{id}/delete','kontakController@delete')->name('deleteKontak');
Route::get('kontak/search', 'kontakController@search')->name('searchKontak');
