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
Auth::routes();

// Route::view('/', 'testhome');

Route::get('home', 'mksHomeController@Admin_Home');

Route::get('/', 'mksHomeController@index');
Route::get('about', 'mksHomeController@about_mks');

//Blogs
Route::get('blogs', 'mksHomeController@blogs');
Route::get('blog/{id}/view', 'mksHomeController@blogs_view');

//Videos
Route::get('videos', 'mksHomeController@videos');
Route::get('video/{id}/view', 'mksHomeController@videoView');

//pressnotes
Route::get('pressnotes', 'mksHomeController@Pressnotes');

//Blogposts
Route::get('blogpost/list', 'mksHomeController@PostList')->name('post.list');
Route::get('blogpost/create', 'mksHomeController@CreateNewPost')->name('post.create');
Route::post('blogpost/store', 'mksHomeController@BlogPostStrore')->name('post.store');
Route::get('blogpost/{id}/edit', 'mksHomeController@EditBlogPost')->name('post.edit');
Route::post('blogpost/update/{id}', 'mksHomeController@UpdateBlogPost')->name('post.update');
Route::get('blogpost/{id}/delete', 'mksHomeController@DeleteBlogPost')->name('post.delete');

//Videos
Route::get('videos/list', 'mksHomeController@VideosList')->name('videos.list');
Route::get('video/add', 'mksHomeController@VideosAdd')->name('video.add');
Route::post('video/store', 'mksHomeController@NewVideoStore')->name('video.store');
Route::get('video/{id}/edit', 'mksHomeController@EditVideo')->name('video.edit');
Route::post('video/update/{id}', 'mksHomeController@UpdateVideo')->name('video.update');
Route::get('video/{id}/delete', 'mksHomeController@DeleteVideo')->name('video.delete');

//Pressnotes(pdf documents)
Route::get('document/list', 'mksHomeController@PressnotesList')->name('pressnote.list');
Route::get('document/upload', 'mksHomeController@PressnotesUpload')->name('pressnote.upload');
Route::post('document/store', 'mksHomeController@PressnoteStore')->name('pressnote.store');
Route::get('document/{id}/edit', 'mksHomeController@PressnoteEdit')->name('pressnote.edit');
Route::post('document/update/{id}', 'mksHomeController@PressnoteUpdate')->name('pressnote.update');
Route::get('document/{id}/delete', 'mksHomeController@PressnoteDelete')->name('pressnote.delete');


// Route::get('test', function(){
//     return utf8_encode(phpinfo());
// });