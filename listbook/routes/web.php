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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'web'],function(){
  Route::group(['prefix' => 'admin' ,'middleware' => ['auth','role:admin']] ,function() {
      Route::resource('authors','AuthorsController',['except' => 'show']);
      Route::resource('books','BooksController');
  });
});

Route::group(['middleware' => 'web'],function(){
  Route::group(['prefix' => 'member' ,'middleware' => ['auth','role:member']] ,function() {
      Route::resource('members','MembersController');
  });
});
