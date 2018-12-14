<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'ClientesController@listarclientes');
Route::get('/clientes/{id}/editar', 'ClientesController@editar');
Route::get('/clientes/{id}/deletar', 'ClientesController@deletar');
Route::get('/cliente/criar', 'ClientesController@form_cadastro');
Route::get('/clientes/cadastrar/', 'ClientesController@cadastrar');








