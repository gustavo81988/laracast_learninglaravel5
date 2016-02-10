<?php

Route::get('about','PagesController@about');
Route::get('contact','PagesController@contact');
Route::get('articles','ArticlesController@index');

Route::group(['middleware' => ['web']], function () {
    Route::resource('articles','ArticlesController');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
