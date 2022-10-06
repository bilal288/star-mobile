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

// Web routes -> No need to be login
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/getArticles/{id?}', 'ArticlesController@getArticles')->name('getArticles');
Route::get('/getAllArticle', 'ArticlesController@getAllArticle')->name('getAllArticle');


Auth::routes();

// admin portal routes-> need to be login first
Route::group(['middleware' => ['auth','AdminAuthentication']], function () {
    Route::get('/dashboard', 'AdminController@index')->name('dashboard');
    Route::get('/add/article', 'AdminController@create')->name('addNewArticle');
    Route::post('/store/article', 'AdminController@store')->name('storeNewArticle');
    Route::get('/article/{id}/activation/{status?}', 'AdminController@activation')->name('activationArticle');
    Route::get('/article/{id}', 'AdminController@delete')->name('deleteArticle');
    Route::get('/edit/article/{id}', 'AdminController@edit')->name('editArticle');
    Route::post('/update/article/', 'AdminController@update')->name('updateArticle');

});
