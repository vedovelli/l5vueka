<?php

use Illuminate\Http\Request;


Route::post('login', ['uses' => 'LoginController@login'])->middleware(['cors', 'api']);
Route::group(['middleware' => ['cors', 'api', 'jwt-auth']], function () {
    Route::get('endereco/{userid}', ['uses' => 'ApiController@address']);
    Route::group(['prefix' => 'usuarios'], function () {
        Route::get('', ['as' => 'users.index', 'uses' => 'UserController@index']);
        Route::get('{id}', ['as' => 'users.get', 'uses' => 'UserController@get']);
        Route::post('criar', ['as' => 'users.create', 'uses' => 'UserController@create']);
        Route::post('atualizar/{id}', ['as' => 'users.update', 'uses' => 'UserController@update']);
        Route::delete('remover/{id}', ['as' => 'users.remove', 'uses' => 'UserController@remove']);
    });
});


// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:api');
