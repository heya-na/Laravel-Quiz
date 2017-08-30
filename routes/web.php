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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/quiz', 'QuestionController@index');

Route::get('/quiz/{question}', 'QuestionController@show');

//store answer into 'answers' database table
Route::post('/quiz/{answer}', 'QuestionController@store');
