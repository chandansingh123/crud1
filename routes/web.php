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
/**
 * 
 * front end
 */
Route::get('/', function () {
    return view('front.pages.index');
    // return view('front.layouts.master');
});


/**
 * 
 * back end
 */


 Route::get('/admin',function(){
     return view ('back.dashboard');
 });

 Route::get('/admin/post','PostController@index')->name('post.index');
 Route::get('/admin/post/create','PostController@create')->name('post.create');
 Route::post('/admin/post/store','PostController@store')->name('post.store');
 Route::get('/admin/post/{post}/edit','PostController@edit')->name('post.edit');
 Route::put('/admin/post/{post}','PostController@update')->name('post.update');