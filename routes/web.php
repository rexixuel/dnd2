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

Route::get('upload', 'DndController@uploadDefault');
Route::get('upload/{courseId}', 'DndController@upload');
Route::post('upload','DndController@storeDefault' );
Route::post('upload/{courseId}','DndController@store' );

Route::get('download', 'DndController@downloadDefault');
Route::get('download/{courseId}', 'DndController@download');
Route::get('downloadSingle/{moduleId}', 'DndController@getFile');
Route::post('download', 'DndController@searchDefault');
Route::post('download/{courseId}', 'DndController@search');
Route::get('downloadAll/{courseId}', 'DndController@downloadAll');
Route::post('delete', 'DndController@delete');

Route::get('quiz', 'QuizController@takeQuizDefault');
Route::get('quiz/{courseId}', 'QuizController@takeQuizTypeDefault');
Route::get('quiz/{courseId}/{quizType}', 'QuizController@takeQuizType');
Route::post('quiz/{courseId}','QuizController@gradeQuiz' );
Route::post('quiz/{courseId}/{quizType}','QuizController@gradeQuiz' );

Route::get('logout', 'Auth\LoginController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
