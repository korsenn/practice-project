<?php

Route::get('{user}/edit', 'EditController@edit')->name('edit'); //форма редактирования
Route::patch('{user}/edit', 'EditController@update')->name('update');//обновление данных в БД после редакт.

Route::get('/list', 'ListController@index')->name('list'); //список

Auth::routes();//регистрация\авторизация

Route::get('/', 'HomeController@index')->name('home'); //главная\домашняя
Route::get('/home', 'HomeController@index')->name('home'); //главная\домашняя
