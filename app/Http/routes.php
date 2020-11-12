<?php

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

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('/hello', function () use ($app) {
    return view('hello');
});
//
$app->get('/index', 'AddressController@index');
$app->get('/create', 'AddressController@create');
$app->get('/edit/{id}', 'AddressController@edit');

$app->POST('/create', 'AddressController@store');
$app->POST('/address/{id}', 'AddressController@destroy');
$app->PUT('/update/{id}', 'AddressController@update');

////used for the API integration
//$app->group(['prefix' => 'api'], function () use ($app) {
//
//    $app->post('create', ['uses' => 'AddressController@create']);
//    $app->post('/address/{id}', 'AddressController@destroy');
//    $app->put('/update/{id}', ['uses' => 'AddressController@update']);
//});