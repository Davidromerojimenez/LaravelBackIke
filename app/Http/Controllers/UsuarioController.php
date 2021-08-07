<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Usuario;

class UsuarioController extends Controller
{


    public function obtenerUsuario($id)
    {

        $usuario = Usuario::findOrFail($id);

        return $usuario;
    }

    public function listarUsuarios()
    {
        $usuarios = Usuario::all();
        return $usuarios;
    }


    public function crearUsuario(Request $request)
    {
        $usuario = new Usuario();
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->rol = $request->rol;

        $usuario->save();
    }



    public function eliminarUsuario($id)
    {
        $usuario = Usuario::destroy($id);
        return $usuario;
    }



    public function actualizarUsuario(Request $request)
    {

        $usuario = Usuario::findOrFail($request->id);

        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->rol = $request->rol;


        $usuario->save();

        return $usuario;
    }

    public function loginUsuario(Request $request)
    {

        $usuario = Usuario::where('name', $request->name)->first();

        if ($usuario->password === $request->password) {
            return $usuario;
        } else {
            return ' ';
        }
    }
}