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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/articles/article/{article}', 'ArticleController@showarticle')->name('article.view');

Route::get('/articles', 'ArticleController@articles')->name('articles');
Route::get('/articles/create', 'ArticleController@createview')->name('article.create');
Route::post('/articles/store', 'ArticleController@store')->name('article.store');
Route::get('/articles/edit/{article}/', 'ArticleController@edit')->name('article.edit');
Route::patch('/articles/{article}/', 'ArticleController@update')->name('article.update');
Route::delete('/articles/delete/{article}', 'ArticleController@delete')->name('article.delete');

