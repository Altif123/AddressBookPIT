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
$app->POST('/update/{id}', 'AddressController@update');


//$app->group(['prefix' => 'api'], function () use ($router) {
//    $router->get('authors',  ['uses' => 'AuthorController@showAllAuthors']);
//
//    $router->get('authors/{id}', ['uses' => 'AuthorController@showOneAuthor']);
//
//    $router->post('authors', ['uses' => 'AuthorController@create']);
//
//    $router->delete('authors/{id}', ['uses' => 'AuthorController@delete']);
//
//    $router->put('authors/{id}', ['uses' => 'AuthorController@update']);
//});