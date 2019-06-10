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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/experience', 'AboutController@experience')->name('experience');
Route::get('/skills', 'AboutController@skills')->name('skills');
Route::get('/about', 'AboutController@about')->name('about');

Route::group(['prefix' => 'services', 'as' => 'services'], function () {
    Route::get('/', 'ServicesController@index');
    Route::get('seo', 'ServicesController@seo')->name('.seo');
    Route::get('web-design', 'ServicesController@webDesign')->name('.web-design');
});
Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');
Route::get('/portfolio/websites', 'PortfolioController@index')->name('websites');

Route::get('/resume', 'ResumeController@index')->name('resume');
Route::get('/contact', 'ContactController@index')->name('contact');

Route::get('/blog', 'BlogController@index')->name('blog');

Route::group(['prefix' => 'sitemap', 'as' => 'sitemap'], function () {
    Route::get('/', 'SiteMapController@index');
});