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

use App\Kino;

Route::get('/', function () {
    $kinos = Kino::all();
    dd($kinos);
    return view('welcome');
});
//definuje cesty
Route::get('/kinos', 'KinoController@index')->name('kinos.index');
Route::get('/kinos/{kino}', 'KinoController@show')->name('kinos.show');
Route::post('kinos/add', 'KinoController@add')->name('kinos.add');
Route::put('/kinos/{kino}', 'KinoController@edit')->name('kinos.edit');
Route::delete('/kinos/{kino}', 'KinoController@delete')->name('kinos.delete');

Route::get('/kinos/zmaz/{kino}', 'KinoController@edit')->name('kinos.zmaz');

