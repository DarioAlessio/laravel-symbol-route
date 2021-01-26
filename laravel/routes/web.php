<?php


Route::get('/home','MainController@home') -> name('home');
Route::get('/blog','MainController@blog') -> name('blog');
Route::get('/about','MainController@about') -> name('about');
Route::get('/pagamenti','MainController@pagamenti') -> name('pagamenti');
Route::get('/pagamentiPending','MainController@pagamentiPending') -> name('pagamentiPending');
