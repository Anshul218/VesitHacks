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

use Illuminate\Support\Facades\Route;

Route::get('/', 'LandingController@index');
Route::get('/login', 'LandingController@login');

Route::get('auth/google', 'Auth\LoginController@redirectToProvider');
Route::get('auth/google/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/dashboard','LandingController@dashboard');
Route::get('/projects','LandingController@show');

// Route::get('/', 'logoutController@index');

