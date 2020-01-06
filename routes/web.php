<?php

Route::get('/', 'TasksController@claro')->name('claro-tasks');

Route::prefix('claro')->group(function() {
    Route::get('feed', 'TasksController@feedClaro')->name('claro-feed');
    Route::get('tarea/{internal_id}', 'TasksController@tareaClaro')->name('claro-task');
});


Route::prefix('en-digital')->group(function() {
    Route::get('tareas', 'TasksController@enDigital')->name('en-digital-tasks');
    Route::get('tickets', 'TicketController@enDigital')->name('en-digital-tickets');
    Route::get('feed', 'TasksController@feedEnDigital')->name('en-digital-feed');
    Route::get('feed/ticket', 'TicketController@feedEnDigital')->name('en-digital-feed-ticket');
    Route::get('tarea/{internal_id}', 'TasksController@tareaEnDigital')->name('en-digital-task');
    Route::get('ticket/{internal_id}', 'TicketController@ticketEndigital')->name('en-digital-ticket');
});


Route::prefix('godaddy')->group(function () {
    Route::get('tareas', 'TasksController@tareasGodaddy')->name('tareas-godaddy');
    Route::get('tickets', 'TicketController@ticketsGodaddy')->name('tickets-godaddy');
    Route::get('feed', 'TasksController@feedGodaddy')->name('feed-godaddy');
    Route::get('feed/ticket', 'TicketController@feedGodaddy')->name('feed-tickets-godaddy');
    Route::get('/tarea/{internal_id}', 'TasksController@tareaGodaddy')->name('tarea-godaddy');
    Route::get('/ticket/{internal_id}', 'TicketController@ticketGodaddy')->name('ticket-godaddy');
});

Route::prefix('ventasclick')->group(function () {
    Route::get('tareas', 'TasksController@tareasVentasClick')->name('tareas-ventasclick');
    Route::get('feed', 'TasksController@feedVentasClick')->name('feed-ventasclick');
    Route::get('/tarea/{internal_id}', 'TasksController@tareaVentasClick')->name('tarea-ventasclick');
});


Route::get('/salesorder', 'MainController@customersSalesOrder')->name('sales-order');
Route::get('/feed/salesorder', 'MainController@feedCustomersSalesOrder')->name('feed-sales-oreder');
Route::get('/salesorder/{internal_id}', 'MainController@showInfoSalesOrder')->name('sales-order-data');

/** Clientes  */
Route::get('/customers', 'MainController@customers')->name('customer');
Route::get('/feed/customers', 'MainController@feedCustomers')->name('feed-customer');
Route::get('/customer/{internal_id}', 'MainController@datacustomer')->name('customer-data');