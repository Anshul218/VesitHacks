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

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

Route::get('/', 'LandingController@index');
Route::get('/login', 'LandingController@login');

Route::get('auth/google', 'Auth\LoginController@redirectToProvider');
Route::get('auth/google/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/dashboard','LandingController@dashboard');
Route::get('/projects','LandingController@show');

route::get('/assessment','landingController@destroy');
route::get('/assessment/assessing','landingController@assessment');

Route::get('/profile','landingController@profile');
Route::get('/managers','LandingController@managers');
Route::get('/employees','LandingController@employees');

route::get('/profile','landingController@profile');
route::get('/contact','landingController@contact');


Route::get('/modal/employees','LandingController@employee_modal');
Route::get('/modal/managers','LandingController@manager_modal');
route::get('/editprofile','landingController@editprofile');
route::get('/modal/employees/remove','landingController@employee_remove');
route::get('/modal/employees/update','landingController@employee_update');

route::get('/createproject','landingController@createproject');
route::get('/createproject/createhead','landingController@createhead');
route::get('/createproject/createhead/addemp','landingController@addemp');

route::get('/test','landingController@store');

route::get('/upload_data', 'AsessmentController@func1');

route::get('/add_user', 'UserController@store');