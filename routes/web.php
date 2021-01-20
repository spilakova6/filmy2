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

//use App\Http\Controllers\UserController;
use App\Kino;
use Illuminate\Support\Facades\Auth;



Route::get('add', function () {
    return view('kino/add');
})->name('add');


//definuje cesty

Route::get('/program', 'KinoController@index')->name('program');
Route::get('/kino/{kino}', 'KinoController@show')->name('kinos.show');
Route::post('kino/add', 'KinoController@add')->name('kinos.add');
Route::put('/kino/{kino}', 'KinoController@edit')->name('kinos.edit');
Route::delete('/kino/{kino}', 'KinoController@delete')->name('kinos.delete');
Route::get('/kino/zmaz/{kino}', 'KinoController@edit')->name('kinos.zmaz');



Auth::routes();
Route::get('/user/ajax','UserController@ajax')->name('user.ajax');
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>['auth']], function (){//az ked sa uzivatel prihlasy, moze vidiet userov
Route::resource('user', UserController::class);
Route::get('/user/{user}/delete', [UserController::class, 'destroy'])->name('user.delete'); //trochu nevyhoda riesenia cez
    //resource, ze to neprida vsetky route, delete ocakava ze sa to bude mazat cez formular, ale my to chceme vymazat tak ze rovno budeme mat tlacitko v gride
    //preo tam treba tuto route

});
Route::post('/user/create', 'UserController@create')->name('user.create');

Route::delete('/user/{user}', 'UserController@destroy')->name('user.destroy');

Route::get('/kino', 'PictureController@index')->name('kinos.index');
Route::get('/', 'PictureController@index')->name('kino');
Route::get('/article', 'ArticleController@index')->name('article');




