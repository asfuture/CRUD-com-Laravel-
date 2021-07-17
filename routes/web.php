<?php

use Illuminate\Support\Facades\Route;

//rota index
Route::get('/usuario','UsuarioController@index');
//rota cadastrar e salva BD
Route::get('/usuario/create','UsuarioController@create');
Route::post('/usuario/create','UsuarioController@store');
//rota visualizar
Route::get('/usuario/show/{id}','UsuarioController@show');
//rota editar
Route::get('/usuario/edit/{id}','UsuarioController@edit');
//rota delete
Route::get('/usuario/delete/{id}','UsuarioController@destroy');


//rota update verificar funcionamento
Route::put('/usuario/update/{id}','UsuarioController@update');







