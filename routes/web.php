<?php

Route::get('/', function () {return view('welcome');});
Route::group(['prefix' => 'regioes'], function() {
    Route::get('/', 'RegiaoController@index');
    Route::get('/{regiao}', 'RegiaoController@show')->where(['regiao'=>'[a-z]+']);
    Route::get('/{regiao}/distritos', 'RegiaoController@distritos')->where(['regiao'=>'[a-z]+']);
});
Route::group(['prefix' => 'estados'], function() {
    Route::get('/', 'EstadoController@index');
    Route::get('/{estado}', 'EstadoController@show')->where(['estado'=>'[a-z]{2}']);
    Route::get('/{estado}/distritos', 'EstadoController@distritos')->where(['estado'=>'[a-z]{2}']);
});
Route::group(['prefix' => 'distritos'], function() {
    Route::get('/', 'DistritoController@index');
    Route::get('/{distrito}', 'DistritoController@show')->where(['distrito'=>'[\d]+']);
    Route::get('/{distrito}/estados', 'DistritoController@estados')->where(['distrito'=>'[\d]+']);
    Route::get('/{distrito}/clubes', 'DistritoController@clubes')->where(['distrito'=>'[\d]+']);
});
Route::group(['prefix' => 'clubes'], function() {
    Route::get('/', 'ClubeController@index');
    Route::get('/{clube}', 'ClubeController@show')->where(['clube'=>'[\w_]+']);
});
