<?php

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'api'], function () {
    Route::get('endereco/{userid}', ['uses' => 'ApiController@address']);
});

Route::group(['prefix' => 'usuarios'], function () {
    Route::get('', ['as' => 'users.index', 'uses' => 'UserController@index']);
    Route::post('criar', ['as' => 'users.create', 'uses' => 'UserController@create']);
    Route::post('atualizar/{id}', ['as' => 'users.update', 'uses' => 'UserController@update']);
    Route::get('remover/{id}', ['as' => 'users.remove', 'uses' => 'UserController@remove']);
});