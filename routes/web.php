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

Route::group(['prefix'=>'/'],function(){
   Route::get('/','FrontEnd\PagesController@index')->name('index');
   Route::get('404','FrontEnd\PagesController@page404')->name('404');
   Route::get('download-resume','FrontEnd\PagesController@downloadResume')->name('download-resume');
});
Route::group(['prefix'=>'admin'],function(){
    Route::get('/get-login','Admin\PagesController@getLogin')->name('admin-get-login');
    Route::post('/post-login','Admin\PagesController@postLogin')->name('admin-post-login');
});


Route::group(['prefix'=>'/admin','middleware'=>'admin'],function(){
Route::get('/dashboard','Admin\PagesController@dashboard')->name('admin-dashboard');
Route::get('logout','Admin\PagesController@logout')->name('admin-logout');
Route::get('/get-upload-resume','Admin\PagesController@getUploadResume')->name('admin-get-upload-resume');
Route::post('/post-upload-resume','Admin\PagesController@postUploadResume')->name('admin-post-upload-resume');

//    Route::post('/post-login',function(){
//        dd('ello');
//    })->name('admin-post-login');

});

