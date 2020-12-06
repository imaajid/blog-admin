<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'User'],function() {
    Route::get('/', 'HomeController@index');
    Route::get('/post/{post}', 'PostController@post')->name('post');

    Route::get('post/tag/{tag}','HomeController@tag')->name('tag');
    Route::get('post/category/{category}','HomeController@category')->name('category');
});



Route::group(['namespace' => 'Admin'],function(){

    Route::get('admin/home','HomeController@index')->name('admin.home');

    Route::resource('admin/user','UserController');
    Route::resource('admin/post','PostController');
    Route::resource('admin/tag','TagController');
    Route::resource('admin/category','CategoryController');

});
