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
    return view('welcome');
});


Route::get('/index', function () {
    return view('index');
});


Route::get('/form-article', function () {
    return view('form-article');
});

Route::get('/form-article', 'ArticleController@index');

Route::post('/article-ins', 'ArticleController@insert');
Route::post('/article-upd', 'ArticleController@update');
Route::post('/article-del', 'ArticleController@delete');

Route::get('/form-album', 'PictureController@index');

Route::post('/form-album', 'PictureController@upload');
Route::post('/pic-del', 'PictureController@delete');

Route::post('/album-ins', 'GalleryController@insert');
Route::post('/album-upd', 'GalleryController@update');
Route::post('/album-del', 'GalleryController@delete');
