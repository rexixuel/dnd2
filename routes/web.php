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
// static pages
Route::get('about', 'StaticController@about');
Route::get('contact', 'StaticController@contact');

// Upload Controller

Route::get('upload/{courseId?}', 'UploadController@upload');
Route::post('upload/{courseId?}','UploadController@store' );

// Download Controller
Route::get('download/{courseId?}', 'DownloadController@download');
Route::get('download/{courseId?}/search', 'DownloadController@search');
Route::get('download/{courseId?}/{sortField}', 'DownloadController@sort');
Route::get('downloadSingle/{moduleId}', 'DownloadController@getFile');

Route::post('download/{courseId?}/search', 'DownloadController@search');
Route::post('download/{courseId?}/downloadSelected', 'DownloadController@downloadSelected');

Route::post('delete', 'DownloadController@deleteAction');
Route::get('downloadAll/{courseId?}', 'DownloadController@downloadAll');

// Quiz Controller
Route::get('quiz', 'QuizController@takeQuizDefault');
Route::get('quiz/{courseId}', 'QuizController@takeQuizTypeDefault');
Route::get('quiz/{courseId}/{quizType}', 'QuizController@takeQuizType');
Route::post('quiz/{courseId}','QuizController@gradeQuiz' );
Route::post('quiz/{courseId}/{quizType}','QuizController@gradeQuiz' );

Route::get('logout', 'Auth\LoginController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
