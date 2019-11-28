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

Route::get('/thank-you/{id}', 'HomeController@quizResults')->name('Quiz');
Route::post('/payment', 'HomeController@stripePayment')->name('stripePayment');

Auth::routes();
//admin routes
Route::group(array('prefix'=> 'admin', 'middleware' => ['auth']), function () {
	Route::get('/dashboard', 'Admin\DashboardController@index')->name('adminDashboard');
	Route::get('/patients', 'Admin\DashboardController@getPatients')->name('getPatients');
	Route::get('/physicians', 'Admin\DashboardController@getPhysicians')->name('getPhysicians');
	Route::get('/profile', 'Admin\DashboardController@profile')->name('profile');
	Route::post('/update-profile', 'Admin\DashboardController@updateprofile')->name('updateprofile');
	Route::post('/update-password', 'Admin\DashboardController@updatepassword')->name('updatepassword');

	Route::get('/quiz/view/{id}', 'Admin\DashboardController@viewQuiz')->name('viewQuiz');
	Route::get('/users', 'Admin\DashboardController@getUsers')->name('getUsers');
	Route::get('/user/delete/{id}', 'Admin\DashboardController@deleteUser')->name('deleteUser');
	Route::get('/quiz/delete/{id}', 'Admin\DashboardController@deleteQuiz')->name('deleteQuiz');
	Route::get('/plans', 'Admin\DashboardController@getPlans')->name('getPlans');
	Route::get('/plans/create', 'Admin\DashboardController@createPlan')->name('getcreatePlan');
	
});
