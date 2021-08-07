<?php

use Illuminate\Support\Facades\Route;

Route::get('obtener_usuario/{id}', 'App\Http\Controllers\UsuarioController@obtenerUsuario');

Route::get('listar_usuarios', 'App\Http\Controllers\UsuarioController@listarUsuarios');

Route::post('crear_usuario', 'App\Http\Controllers\UsuarioController@crearUsuario');

Route::get('eliminar_usuario/{id}', 'App\Http\Controllers\UsuarioController@eliminarUsuario');

Route::post('actualizar_usuario', 'App\Http\Controllers\UsuarioController@actualizarUsuario');

Route::post('login', 'App\Http\Controllers\UsuarioController@loginUsuario');