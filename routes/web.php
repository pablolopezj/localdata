<?php

Route::get('/', 'MainController@index')->name('main');
Route::get('/tasks', 'MainController@tasks')->name('tasks');
