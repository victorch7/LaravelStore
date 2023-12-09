<?php

namespace App\Http\Controllers\Tienda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Catalogo extends Controller
{
    public function index(){
        return view('catalogo.listado');
    }
}
