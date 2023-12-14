<?php

namespace App\Http\Controllers\Tienda;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;

class Usuarios extends Controller
{
    public function index(){
        $users = User::all(); // Obtener todos los usuarios
        return view('usuarios.listado')->with('users', $users);
    }

    //Para Editar por el Admin
    public function form_edicion($id){
        $usuario = User::findorFail($id); //manda a buscar
        return view('usuarios.form_edicion', ['usuario'=>$usuario]);       
    }

    public function editar(Request $request, $id ){
        $usuario = User::findorFail($id); //manda a buscar
        $usuario->name = $request->input('nom_usuario');
        $usuario->email = $request->input('correo');
        $usuario->password = $request->input('contraseña');
        $usuario->save();

        return redirect()->route('listado_usuarios');
    }

     //Para eliminar por el Admin
     public function eliminar($id){
        $usuario = User::findorFail($id); //manda a buscar
        $usuario->delete();
        return redirect()->route('listado_usuarios');       
    }
}
