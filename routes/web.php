<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/webinarios', 'ContentController@webinars')->name('webinars.index');
Route::get('/webinarios/{webinar:slug}', 'ContentController@showWebinar');

Route::get('/podcasts', 'ContentController@podcasts')->name('podcasts.index');
Route::get('/podcasts/{podcast:slug}', 'ContentController@showPodcast');

Route::get('/boas-praticas', 'ContentController@guidelines')->name('guidelines.index');
Route::get('/boas-praticas/{guideline:slug}', 'ContentController@showGuideline');

Route::get('/entrevistas', 'ContentController@interviews')->name('interviews.index');
Route::get('/entrevistas/{interview:slug}', 'ContentController@showInterview');

Route::get('/biblioteca', 'ContentController@articles')->name('articles.index');

Route::get('/noticias', 'ContentController@news')->name('news.index');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
