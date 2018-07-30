<?php
//Route::get('/', "pruebaController@autoModel");
Route::get('/new', "aController@autonew");
Route::get('/pruebadepost', "aController@pruebademodelo");
/*
Route::group(['prefix' => 'analisisAplicaciones'], function () {
    Route::get('index', 'admin1\analisisAplicacionesController@index')->name("analisisaplicaciones.index");
    Route::get('create', 'admin1\analisisAplicacionesController@create')->name("analisisaplicaciones.create");
    Route::get('edit/{id}', 'admin1\analisisAplicacionesController@edit')->name("analisisaplicaciones.edit");
    Route::get('detail/{id}', 'admin1\analisisAplicacionesController@show')->name("analisisaplicaciones.show");
    Route::post('store', 'admin1\analisisAplicacionesController@store')->name("analisisaplicaciones.store");
    Route::post('update/{id}', 'admin1\analisisAplicacionesController@update')->name("analisisaplicaciones.update");
    Route::post('delete/{id}', 'admin1\analisisAplicacionesController@destroy');      
});*/
//Route::post('analisisAplicaciones/store', 'analisisAplicacionesAPIController@store');

