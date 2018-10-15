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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','TeamsController@index')->name('teams');
Route::get('/teams/{id}','TeamsController@show')->name('team');
Route::get('/drivers/{id}','DriversController@show')->name('driver');
//register
Route::get('/register', 'RegisterController@create');
Route::post('/register', 'RegisterController@store');
//login
Route::get('/login', 'LoginController@create')->name('login');
Route::post('/login', 'LoginController@store')->name('login-store');
//logout
Route::get('/logout', 'LoginController@logout')->name('logout'); 
Route::post('/teams/{team_id}/comments','CommentsController@store')->name('comments-team'); 
// verification user with mail
Route::get('/verification/{id}','LoginController@verification')->name('verification');