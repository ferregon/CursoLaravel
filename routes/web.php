<?php

Route::view('/', '/home')->name('home');

Route::resource('projects', 'ProjectController')->names('project');

Route::post('contact', 'MessagesController@store')->name('message.store');
Route::view('/contact', '/contact')->name('contact');
Route::view('/about', '/about')->name('about');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
