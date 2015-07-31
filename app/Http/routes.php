<?php

// Authentication routes...
Route::get('/login',['as' => 'login', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('/login',['as' => 'login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('/register',['as' => 'register', 'uses' => 'Auth\AuthController@getRegister']);
Route::post('/register',['as' => 'register', 'uses' => 'Auth\AuthController@postRegister']);

Route::get('/home',['as' => 'home', 'middleware' => 'auth', 'uses' => 'HomeController@index'] );