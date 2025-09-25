<?php

$router->get('/users', 'UserController@index');
$router->post('/users', 'UserController@index');

$router->get('/groups', 'GroupController@index');
$router->post('/groups', 'GroupController@index');

$router->get('/product', 'ProductController@index');
$router->post('/product', 'ProductController@index');

$router->getRout();
