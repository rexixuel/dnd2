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
    return view('index');
});

Route::get('upload', 'DndController@upload');
Route::get('download', 'DndController@download');
Route::post('download', 'DndController@search');
Route::get('download/{id}', 'DndController@getFile');
Route::post('delete', 'DndController@delete');

Route::get('quiz', 'QuizController@takeQuiz');
Route::post('quiz','QuizController@gradeQuiz' );

Route::get('logout', 'Auth\LoginController@logout');
Route::post('upload','DndController@store' );

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
