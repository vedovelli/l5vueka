<?php

use Illuminate\Http\Request;


Route::group(['middleware' => ['cors', 'api']], function () {
    Route::post('login', ['uses' => 'LoginController@login']);
    Route::get('endereco/{userid}', ['uses' => 'ApiController@address']);
    Route::group(['prefix' => 'usuarios'], function () {
        Route::get('', ['as' => 'users.index', 'uses' => 'UserController@index']);
        Route::post('criar', ['as' => 'users.create', 'uses' => 'UserController@create']);
        Route::post('atualizar/{id}', ['as' => 'users.update', 'uses' => 'UserController@update']);
        Route::get('remover/{id}', ['as' => 'users.remove', 'uses' => 'UserController@remove']);
    });
});


// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:api');
