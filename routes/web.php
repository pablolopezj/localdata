<?php

Route::get('/', 'MainController@index')->name('main');
Route::get('/feed/task-claro', 'MainController@feedClaro')->name('tasks');
Route::get('/tarea-claro/{internal_id}', 'MainController@tareaClaro')->name('tarea-claro');

Route::get('/tareas/en-digital', 'MainController@tareased')->name('tareas-en-digital');
Route::get('/feed/task-endigital', 'MainController@feedEndigital')->name('tasks');
Route::get('/tarea-en-digital/{internal_id}', 'MainController@tareaEnDigital')->name('tarea-en-digital');

Route::get('/tareas/goaddy', 'MainController@tareasGodaddy')->name('tareas-en-digital');
