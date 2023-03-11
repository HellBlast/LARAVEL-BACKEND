<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{

    public function dato($alias){
        $usuario = Usuario::select('alias', 'contraseña')->where('alias', $alias)->first();
        return $usuario;
        //return Usuario::find($id);
    }

    public function alias($alias){
        return Usuario::find($alias);
    }

    public function contraseña($contraseña){
        return Usuario::find($contraseña);
    }

    public function create(Request $request){
        $usuario = new Usuario();
        $usuario->nombre = $request->input('nombre');
        $usuario->alias  = $request->input('alias');
        $usuario->contraseña  = $request->input('contrasena');
        $usuario->save();
        return json_encode(['msg'=>'added']);
    }

}
