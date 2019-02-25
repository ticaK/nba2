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

Route::get('/', 'TeamsController@index');

Route::group(['middleware'=>['auth']],function(){
    Route::get('/teams','TeamsController@index')->name('teams');
    Route::get('/teams/{id}','TeamsController@show')->name('team');
    Route::get('/players','PlayersController@index')->name('players');
    Route::get('/players/{id}','PlayersController@show')->name('player');
    Route::get('/logout', 'LoginController@logout')->name('logout');

    Route::post('/teams/{id}/comments','CommentsController@store')->name('comments');

    
});


Route::group(['middleware'=>['guest']],function(){
    Route::get('/register','RegisterController@create')->name('show-register');
    Route::post('/register','RegisterController@store')->name('register');
    Route::get('/login','LoginController@create')->name('show-login');
    Route::post('/login','LoginController@store')->name('login');
});
