<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::prefix('accomplishments')->group(function() {
    Route::get('/', 'AccomplishmentsController@all');
    Route::get('{accomplishment}', 'AccomplishmentsController@single');
});

Route::prefix('blog')->group(function() {
    Route::get('/', 'BlogController@recent');
    Route::get('{post}', 'BlogPostController@single');
});

Route::prefix('companies')->group(function() {
    Route::get('/', 'CompaniesController@all');
    Route::get('{company}', 'CompaniesController@single');
    Route::get('{company}/projects', 'CompaniesController@projects');
    Route::get('{company}/projects/{project}', 'CompaniesController@project');
});

Route::prefix('legal')->group(function() {
    Route::get('/', 'LegalController@all');
    Route::get('{legal}', 'LegalController@legal');
});

Route::prefix('projects')->group(function() {
    Route::get('/', 'ProjectsController@all');
    Route::get('{project}', 'ProjectsController@single');
});

Route::prefix('resume')->group(function() {
    Route::get('latest', 'ResumeController@latest');
});

Route::get('skills', 'SkillsController@all');
Route::get('skills/categories', 'SkillsController@categories');
Route::get('skills/sections', 'SkillsController@sections');
Route::get('skills/sections/{section}', 'SkillsController@section');

Route::get('/', 'ApiController@api');
Route::get('{any}', 'ErrorController@error404');