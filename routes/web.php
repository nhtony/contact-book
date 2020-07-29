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

Route::get('/', 'ContactController@index')->name('contact.index');

Route::get('/create', 'ContactController@create')->name('contact.create');

Route::post('/', 'ContactController@store')->name('contact.store');

Route::get('/{contact}', 'ContactController@show')->name('contact.show');

Route::get('/{contact}/edit', 'ContactController@edit')->name('contact.edit');

Route::put('/{contact}', 'ContactController@update')->name('contact.update');

Route::delete('/{contact}', 'ContactController@destroy')->name('contact.destroy');
