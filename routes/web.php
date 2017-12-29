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

Route::get('blog/{slug}',['as'=>'blog.single','uses'=>'BlogController@getSingle'])
		->where('slug','[\w\d\-\_]+');
Route::get('blog',['uses'=>'BlogController@getIndex','as'=>'blog.index']);
Route::get('contact', 'PagesController@getContact');
Route::post('contact', 'PagesController@postContact');
Route::get('/about', 'PagesController@getAbout');
Route::get('/','PagesController@getIndex')->name('myHome');

// Posts
Route::resource('posts','PostController');
Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('/logout', 'Auth\LoginController@logout');

// Categories
Route::resource('categories','CategoryController',['except'=>['create']]);

// User Profle
Route::resource('user','UserController',['except'=>['destroy','create','store']]);

// Tags
Route::resource('tags','TagController',['except'=>['create']]);