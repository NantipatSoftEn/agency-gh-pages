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
//////////////--GET--//////////////

//////////////Gallery//////////////
Route::get('/form-album', 'GalleryController@create');
Route::get('/edit-album/{id}', 'GalleryController@edit');
Route::get('/show-album', 'GalleryController@index');
//////////////Article//////////////
Route::get('/edit-article/{id}', 'ArticleController@edit');
Route::get('/show-article', 'ArticleController@index');
Route::get('/form-article', 'ArticleController@create');
/////<---------------------->//////

//////////////--POST--/////////////

//////////////Gallery//////////////
Route::post('/form-album', 'GalleryController@upload');
Route::post('/album-ins', 'GalleryController@insert');
Route::post('/album-upd', 'GalleryController@update');
//////////////Article//////////////
Route::post('/article-ins', 'ArticleController@insert');
Route::post('/article-upd', 'ArticleController@update');
//////////////Picture//////////////
Route::post('/pic-upload', 'PictureController@upload');
/////<---------------------->//////

//////////////--DELETE--////////////
Route::delete('/album-del/{id}', 'GalleryController@delete');
Route::delete('/article-del/{id}', 'ArticleController@delete');
Route::delete('/pic-del/{id}', 'PictureController@delete');
/////<---------------------->//////