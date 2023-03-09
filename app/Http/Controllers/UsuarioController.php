<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function datos(){
        return Usuario::paginate();
    }

    public function dato($id){
        return Usuario::find($id);
    }

    public function create(Request $request){
        $usuario = new Usuario();
        $usuario->nombre = $request->input('nombre');
        $usuario->alias  = $request->input('alias');
        $usuario->contraseña  = $request->input('contraseña');
        $usuario->save();
        return json_encode(['msg'=>'added']);
    }

    public function destroy($id){
        Usuario::destroy($id);
        return json_encode(['msg'=>'removed']);
    }

    public function update(Request $request, $id){
        $nombre =$request->input('nombre');
        $alias =$request->input('alias');
        $contraseña =$request->input('contraseña');
        Usuario::where('id', $id)->update(
            ['nombre'=>$nombre,
            'alias'=>$alias,
            'contraseña'=>$contraseña]
        );
        return json_encode(['msg'=>'edited']);
    }
}
