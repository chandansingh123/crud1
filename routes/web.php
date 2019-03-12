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
// Route::get('/', function () {
//     return view('front.pages.index');
    // return view('front.layouts.master');
// });

Route::get('/','HomeController@index');

/**
 * 
 * back end
 */

// Route::group(['prefix' =>'admin','middleware'=>'auth'] , function () {   
    
//     Route::get('/', function () {
//         return view('back.dashboard');
        
//     });
    
//     Route::resources ([
//         'posts'=> 'PostController',
//         'categories'=> 'CategoryController'
//     ]);



Route::prefix('admin')->group(function () {   
    
    Route::get('/', function () {
        return view('back.dashboard');
        // return view('front.layouts.master');
    })->middleware('auth');
    // Route::resources ([
    //     'posts'=> 'PostController',
    //     'categories'=> 'CategoryController'
    // ]);

    Route::resource('posts','PostController');
    Route::resource('categories','CategoryController');
        // Route::get('posts','PostController@index')->name('posts.index');
        // Route::get('posts/create','PostController@create')->name('posts.create');
        // Route::post('posts/store','PostController@store')->name('posts.store');
        // Route::get('posts/{post}/edit','PostController@edit')->name('posts.edit');
        // Route::put('posts/{post}','PostController@update')->name('posts.update');
        // Route::delete('posts/{post}','PostController@destroy')->name('posts.destroy');
    
});
//  Route::get('/admin/posts','PostController@index')->name('posts.index');
//  Route::get('/admin/posts/create','PostController@create')->name('posts.create');
//  Route::post('/admin/posts/store','PostController@store')->name('posts.store');
//  Route::get('/admin/posts/{post}/edit','PostController@edit')->name('posts.edit');
//  Route::put('/admin/posts/{post}','PostController@update')->name('posts.update');
//  Route::delete('/admin/posts/{post}','PostController@destroy')->name('posts.destroy');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
