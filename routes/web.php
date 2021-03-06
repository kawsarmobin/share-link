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

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function() {
    Route::resource('category', 'Admin\CategoriesController')->except('destroy');
    Route::get('category/delete/{id}', 'Admin\CategoriesController@destroy')->name('category.destroy');

    Route::resource('storedurl', 'Admin\StoredUrlsController')->except('destroy');
    Route::get('storedurl/delete/{id}', 'Admin\StoredUrlsController@destroy')->name('storedurl.destroy');
    Route::get('single/category/{id}', 'Admin\StoredUrlsController@singleCategory')->name('category.single');

    Route::resource('profiles', 'Admin\ProfilesController');
});
