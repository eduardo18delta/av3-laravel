<?php

/* Rotas para a AV3 */
Route::get('/', 'ClientesController@listarclientes');
Route::get('/clientes/{id}/editar', 'ClientesController@editar');
Route::get('/clientes/{id}/deletar', 'ClientesController@deletar');
Route::get('/cliente/criar', 'ClientesController@form_cadastro');
Route::get('/clientes/cadastrar/', 'ClientesController@cadastrar');