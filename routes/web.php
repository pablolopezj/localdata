<?php

Route::get('/', 'MainController@index')->name('main');
Route::get('/feed/task-claro', 'MainController@feedClaro')->name('feed-claro');
Route::get('/tarea-claro/{internal_id}', 'MainController@tareaClaro')->name('tarea-claro');

Route::get('/tareas/en-digital', 'MainController@tareased')->name('tareas-en-digital');
Route::get('/feed/task-endigital', 'MainController@feedEndigital')->name('feed-en-digital');
Route::get('/tarea-en-digital/{internal_id}', 'MainController@tareaEnDigital')->name('tarea-en-digital');

Route::get('/tareas/goaddy', 'MainController@tareasGodaddy')->name('tareas-godaddy');
Route::get('/feed/task-godaddy', 'MainController@feedGodaddy')->name('feed-godaddy');
Route::get('/tarea-godaddy/{internal_id}', 'MainController@tareaGodaddy')->name('tarea-godaddy');

Route::get('/tickets/goadaddy', 'MainController@ticketsGodaddy')->name('tickets-godaddy');
Route::get('/feed/tickets-godaddy', 'MainController@feedGodaddyTicket')->name('feed-godaddy-ticket');
Route::get('/ticket-godaddy/{internal_id}', 'MainController@ticketGodaddy')->name('ticket-godaddy');

Route::get('/tickets/endigital', 'MainController@ticketsEndigital')->name('tickets-endigital');
Route::get('/feed/tickets-endigital', 'MainController@feedEndigitalTicket')->name('feed-endigital-ticket');
Route::get('/ticket-endigital/{internal_id}', 'MainController@ticketEndigital')->name('ticket-endigital');

Route::get('/customers/claro', 'MainController@customersClaro')->name('customers-claro');
Route::get('/feed/customers/claro', 'MainController@feedCustomersClaro')->name('feed-claro-customer');
Route::get('/customers-claro/{internal_id}', 'MainController@customerDataCalro')->name('customer-claro');

Route::get('/customers/en-digital', 'MainController@customersEnDigital')->name('customers-en-digital');
Route::get('/feed/customers/en-digital', 'MainController@feedCustomersEnDigital')->name('feed-en-digital-customer');
Route::get('/customers-en-digital/{internal_id}', 'MainController@customerDataEnDigital')->name('customer-en-digital');

Route::get('/customers/godaddy', 'MainController@customersGodaddy')->name('customers-godaddy');
Route::get('/feed/customers/godaddy', 'MainController@feedCustomersGodaddy')->name('feed-godaddy-customer');
Route::get('/customers-godaddy/{internal_id}', 'MainController@customerGodaddy')->name('customer-godaddy');

Route::get('/salesorder', 'MainController@customersSalesOrder')->name('sales-order');
Route::get('/feed/salesorder', 'MainController@feedCustomersSalesOrder')->name('feed-sales-oreder');
Route::get('/salesorder/{internal_id}', 'MainController@customerSalesOrder')->name('sales-order-data');