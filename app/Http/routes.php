<?php
$app->group(['middleware' => 'auth', 'namespace' => 'App\Http\Controllers'], function ($app) {
    $app->get('/', ['as' => 'root', 'uses' =>  'DefaultController@index']);
    $app->get('/user/logout', ['as' => 'user_logout', 'uses' =>  'UserController@logout']);

    $app->get('/form', ['as' => 'root', 'uses' =>  'DefaultController@form']);
    $app->get('/table', ['as' => 'root', 'uses' =>  'DefaultController@table']);

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

});

// пользователи
$app->get('/login', ['as' => 'login', 'uses' =>  'UserController@login']);
$app->post('/login/check', ['as' => 'login_check', 'uses' =>  'UserController@check']);
