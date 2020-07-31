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

Route::get('/', 'HomeController@index')->name('home.index');

Route::get('/pt', 'LanguageController@pt')->name('language.pt');
Route::get('/es', 'LanguageController@es')->name('language.es');
Route::get('/en', 'LanguageController@en')->name('language.en');

// Route::get('/', function () { return redirect()->route('webinars.index'); });

Route::get('/busca', 'SearchController@index')->name('search.index');

Route::get('/webinarios', 'ContentController@webinars')->name('webinars.index');
Route::get('/webinarios/categoria/{category:slug}', 'ContentController@webinars');
Route::get('/webinarios/{webinar:slug}', 'ContentController@showWebinar')->name('webinar');

Route::get('/podcasts', 'ContentController@podcasts')->name('podcasts.index');
Route::get('/podcasts/categoria/{category:slug}', 'ContentController@podcasts');
Route::get('/podcasts/{podcast:slug}', 'ContentController@showPodcast')->name('podcast');

Route::get('/boas-praticas', 'ContentController@guidelines')->name('guidelines.index');
Route::get('/boas-praticas/categoria/{category:slug}', 'ContentController@guidelines');
Route::get('/boas-praticas/{guideline:slug}', 'ContentController@showGuideline')->name('guideline');

Route::get('/entrevistas', 'ContentController@interviews')->name('interviews.index');
Route::get('/entrevistas/categoria/{category:slug}', 'ContentController@interviews');
Route::get('/entrevistas/{interview:slug}', 'ContentController@showInterview')->name('interview');

Route::get('/biblioteca', 'ContentController@articles')->name('articles.index');
Route::get('/biblioteca/categoria/{category:slug}', 'ContentController@articles');

Route::get('/noticias', 'ContentController@news')->name('news.index');
Route::get('/noticias/categoria/{category:slug}', 'ContentController@news');

Route::get('/trilhas', 'ContentController@trails')->name('trails.index');
Route::get('/trilhas/categoria/{category:slug}', 'ContentController@trails');
Route::get('/trilhas/{trail:slug}', 'ContentController@showTrail')->name('trail.show');

Route::get('/categorias/{category:slug}', 'CategoryController@index')->name('categories.index');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
