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
    return view('/auth/login');
});
//  Route::view('/blogs','/design/blog');
//  Route::view('/home','/home');

//BLOGS
 Route::get('/contentupload','BlogController@cms')->name('writeblog');
 Route::post('/contentupload/blogstore','BlogController@blogstore');

 Route::get('/blogs/show','BlogController@blogshow');
 Route::get('/edit/blog/{id}','BlogController@edit');
 Route::get('/blog/delete/{id}','BlogController@blogdestroy');
 Route::put('/updateblog/{id}','BlogController@update');

 //VIDEOS
 
 Route::get('/videodetails','VideosController@newvideo')->name('videocms');
 Route::post('/video/videostore','VideosController@videostore');
 Route::get('/videos/show','VideosController@showvideos');
 Route::get('/single-video/{id}','VideosController@singlevideo');
 Route::get('/video/edit/{id}','VideosController@videoedit');
 Route::put('/video/update/{id}','VideosController@update');
 Route::get('/delete/{id}','VideosController@destroy');


 //AUDIO
 Route::get('/audio','AudioController@audioindex')->name('uploadaudio');
 Route::post('/audio/audiostore','AudioController@audiostore');
 Route::get('/audios/show','AudioController@audioshow');
 Route::get('/edit/audio/{id}','AudioController@editaudio');
 Route::put('/update/audio/{id}','AudioController@updateaudio');
 Route::get('/audio/delete/{id}','AudioController@destroyaudio');
 Route::get('/single-audio/{id}','AudioController@singleaudio');

 //presentations
 Route::get('/upload-presentations','PresentationController@docsindex')->name('pptdetails');
 Route::post('/store/presentation','PresentationController@storeppt');
 Route::get('/show/presentations','PresentationController@showppt');
 Route::get('/edit/ppt/{id}','PresentationController@editppt');
 Route::put('/updateppt/{id}','PresentationController@updateppt');
 Route::get('/ppt/delete/{id}','PresentationController@pptdestroy');

 //Document
 Route::get('/upload-documents','DocumentController@createdocs')->name('docsdetails');
 Route::post('/store/document','DocumentController@docsstore');
 Route::get('/show/document','DocumentController@docsshow');
 Route::get('/edit/{id}','DocumentController@editdocs');
 Route::put('/updatedocs/{id}','DocumentController@updatedocs');
 Route::get('/document/delete/{id}','DocumentController@docsdestroy');
 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
