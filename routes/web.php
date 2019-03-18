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

Route::get('/', 'IndexController@index')->name('index');

Auth::routes();

//Posts
Route::middleware('auth')->group(function(){
	Route::get( '/post/new', 'PostController@createForm' )->name( 'post.create_form' );
	Route::post( '/post/new', 'PostController@store' )->name( 'post.store' );
});
Route::get( '/post/{post}', 'PostController@show' )->name('post.show');
Route::get( '/user/{user}/posts', 'PostController@showByUser' )->name('user.posts');

//Home
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@save');