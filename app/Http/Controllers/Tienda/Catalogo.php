<?php

namespace App\Http\Controllers\Tienda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product; //Se importa el modelo

class Catalogo extends Controller
{
    public function index(){
        $producto = Product:: all();
        return view('catalogo.listado', compact('producto'));
    }
}
