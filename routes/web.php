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
//     return view('layouts/header');
//     return view('welcome');
//     return view('layouts/footer');
// });

Route::get('/', 'HomeController@index')->name('home');
Route::get('/signup/patient', 'HomeController@patientSignup')->name('patientSignup');
Route::get('/signup/physician', 'HomeController@physicianSignup')->name('physicianSignup');

Route::post('/signup/patient', 'HomeController@patientSignupQuiz')->name('patientSignupQuiz');
Route::post('/signup/physician', 'HomeController@physicianSignupQuiz')->name('physicianSignupQuiz');

Route::get('/thank-you', 'HomeController@quizResults')->name('Quiz');

Auth::routes();
//admin routes
Route::group(array('prefix'=> 'admin', 'middleware' => ['auth']), function () {
	Route::get('/dashboard', 'Admin\DashboardController@index')->name('adminDashboard');
	Route::get('/patients', 'Admin\DashboardController@getPatients')->name('getPatients');
	Route::get('/physicians', 'Admin\DashboardController@getPhysicians')->name('getPhysicians');
});
