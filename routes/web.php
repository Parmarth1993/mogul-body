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
Route::get('/quiz', 'HomeController@quiz')->name('Quiz');
Route::get('/showquiz', 'HomeController@showquiz')->name('Quiz');
Route::post('/home/saveQuiz', 'HomeController@saveQuiz');

Auth::routes();
