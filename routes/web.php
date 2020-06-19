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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
