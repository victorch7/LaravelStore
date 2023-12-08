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
}
