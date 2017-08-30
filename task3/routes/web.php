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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => ['web'] ], function () {
    Route::group(['prefix' => 'member','middleware'=> ['auth','role:member'] ], function () {
        Route::resource('image', 'ImageController');
        Route::get('/list','ImageController@imagelist')->name('image.imagelist');
    });
});
