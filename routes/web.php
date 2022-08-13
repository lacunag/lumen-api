<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/clients', 'ClientController@index');
$router->get('/clients/{id}', 'ClientController@show');
$router->post('/clients', 'ClientController@store');
$router->put('/clients/{id}', 'ClientController@update');
$router->delete('/clients/{id}', 'ClientController@delete');
