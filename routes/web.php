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

Route::group(['prefix' => 'about', 'as' => 'about'], function () {
    Route::get('/', 'AboutController@about');
    Route::get('backyard', 'AboutController@backyard')->name('.backyard');
    Route::get('hiking', 'AboutController@hiking')->name('.hiking');
    Route::get('wood-working', 'AboutController@woodWorking')->name('.wood-working');
});

Route::group(['prefix' => 'legal', 'as' => 'legal'], function () {
    Route::get('privacy', 'LegalController@privacy')->name('.privacy');
    Route::get('terms', 'LegalController@terms')->name('.terms');
});

Route::group(['prefix' => 'services', 'as' => 'services'], function () {
    Route::get('/', 'ServicesController@index');
    Route::get('consulting', 'ServicesController@consulting')->name('.consulting');
    Route::get('email-hosting', 'ServicesController@emailHosting')->name('.email-hosting');
    Route::get('programming', 'ServicesController@programming')->name('.programming');
    Route::get('seo', 'ServicesController@seo')->name('.seo');
    Route::get('web-design', 'ServicesController@webDesign')->name('.web-design');
    Route::get('web-hosting', 'ServicesController@webHosting')->name('.web-hosting');
});

Route::group(['prefix' => 'portfolio', 'as' => 'portfolio'], function () {
    Route::get('/', 'PortfolioController@index');
    Route::get('websites', 'PortfolioController@websites')->name('.websites');
});

Route::get('/resume', 'ResumeController@index')->name('resume');
Route::get('/contact', 'ContactController@index')->name('contact');

Route::get('/blog', 'BlogController@index')->name('blog');

Route::group(['prefix' => 'sitemap', 'as' => 'sitemap'], function () {
    Route::get('/', 'SiteMapController@index');
});