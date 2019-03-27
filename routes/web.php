<?php


Route::get('/', function () {
    return view('index');
});

Route::get('/novaResidencia', 'ResidenciaController@novaResidencia');
Route::get('/listaDeResidencia', 'ResidenciaController@listaResidencia');