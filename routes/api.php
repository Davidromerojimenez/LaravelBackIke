<?php

use Illuminate\Support\Facades\Route;

Route::group(
    [
        'middleware' => 'api',
        'prefix' => 'auth'
    ],
    function ($router) {
        Route::post('login', 'App\Http\Controllers\AuthController@login');
        Route::post('logout', 'App\Http\Controllers\AuthController@logout');
        Route::post('refresh', 'App\Http\Controllers\AuthController@refresh');
        Route::post('me', 'App\Http\Controllers\AuthController@me');
        Route::post('register', 'App\Http\Controllers\AuthController@register');
    }
);

Route::get('products', 'App\Http\Controllers\ProductController@listarProductos');

Route::post('crear_producto', 'App\Http\Controllers\ProductController@crearProducto');

Route::post('actualizar_stock', 'App\Http\Controllers\ProductController@actualizarStock');


Route::get('obtener_usuario/{id}', 'App\Http\Controllers\UsuarioController@obtenerUsuario');

Route::get('listar_usuarios', 'App\Http\Controllers\UsuarioController@listarUsuarios');

Route::post('crear_usuario', 'App\Http\Controllers\UsuarioController@crearUsuario');

Route::get('eliminar_usuario/{id}', 'App\Http\Controllers\UsuarioController@eliminarUsuario');

Route::post('actualizar_usuario', 'App\Http\Controllers\UsuarioController@actualizarUsuario');