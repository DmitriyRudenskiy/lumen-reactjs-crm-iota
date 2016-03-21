<?php
$app->group(['middleware' => 'auth', 'namespace' => 'App\Http\Controllers'], function ($app) {
    $app->get('/', ['as' => 'root', 'uses' =>  'DefaultController@index']);
    $app->get('/user/logout', ['as' => 'user_logout', 'uses' =>  'UserController@logout']);

    // пользователи
    $app->get('/user/list', ['as' => 'user_list', 'uses' =>  'UserController@index']);
    $app->get('/user/view/{id}', ['as' => 'user_view', 'uses' =>  'UserController@view']);
    $app->post('/user/update', ['as' => 'user_update', 'uses' =>  'UserController@update']);

    // заказчики
    $app->get('/customer/list', ['as' => 'customer_list', 'uses' => 'CustomerController@index']);
    $app->get('/customer/view/{id}', ['as' => 'customer_view', 'uses' => 'CustomerController@view']);
    $app->post('/customer/update', ['as' => 'customer_update', 'uses' => 'CustomerController@update']);

    // работа с заказами
    $app->get('/order/list', ['as' => 'order_list', 'uses' =>  'OrderController@index']);
    $app->get('/order/create', ['as' => 'order_create', 'uses' =>  'OrderController@create']);
    $app->get('/order/view/{id}', ['as' => 'order_view', 'uses' =>  'OrderController@view']);
    $app->post('/order/insert', ['as' => 'order_insert', 'uses' =>  'OrderController@insert']);

    // Список задачь
    $app->get('/task', ['as' => 'task_list', 'uses' =>  'TaskController@index']);
    $app->post('/task/insert', ['as' => 'task_insert', 'uses' =>  'TaskController@insert']);
    $app->get('/task/get', ['as' => 'task_get', 'uses' =>  'TaskController@get']);

    // исполнители
    $app->get('/printer', ['as' => 'printer_index', 'uses' =>  'PrinterController@index']);
    $app->get('/printer/create', ['as' => 'printer_create', 'uses' => 'PrinterController@create']);
    $app->get('/printer/view/{id}', ['as' => 'printer_view', 'uses' => 'PrinterController@view']);
    $app->post('/customer/update', ['as' => 'printer_update', 'uses' => 'PrinterController@update']);

    // отчёты
    $app->get('/report/printer', ['as' => 'report_index', 'uses' =>  'ReportController@index']);
    $app->get('/report/printer', ['as' => 'report_printer', 'uses' =>  'ReportController@printer']);


});

// пользователи
$app->get('/login', ['as' => 'login', 'uses' =>  'UserController@login']);
$app->post('/login/check', ['as' => 'login_check', 'uses' =>  'UserController@check']);
