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

Route::get('/teams', 'TeamController@index');
Route::get('/teams/{team_id}','TeamController@show');

Route::get('/players/{id}' , 'PlayerController@showplayer');
Route::get('/auth/register' , 'RegisterController@create');
Route::post('/auth/register' ,'RegisterController@store');
                            