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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('index');
});




Route::get('/edit-article/{id}', 'ArticleController@edit');


Route::get('/form-album', 'GalleryController@create');
Route::post('/form-album', 'GalleryController@upload');

Route::get('/show-article', 'ArticleController@index');
Route::get('/form-article', 'ArticleController@create');
Route::post('/article-ins', 'ArticleController@insert');
Route::post('/article-upd', 'ArticleController@update');
Route::delete('/article-del/{id}', 'ArticleController@delete');

//Route::get('/form-album', 'PictureController@index');

//Route::post('/form-album', 'PictureController@upload');
Route::post('/pic-del', 'PictureController@delete');

Route::post('/album-ins', 'GalleryController@insert');
Route::get('/show-album', 'GalleryController@index');
Route::post('/album-upd', 'GalleryController@update');
Route::delete('/album-del/{id}', 'GalleryController@delete');
