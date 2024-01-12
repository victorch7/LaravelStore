<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product; //Se importa el modelo
use Cart;

class CarritoController extends Controller
{
    public function add(Request $request){
        $producto = Product::find($request->id);
        if(empty($producto))
            return redirect('/');
        
        Cart::add(
            $producto->codproducto,
            $producto->nomproducto,
            1,
            $producto->precio,
            ["imagen"=>$producto->imagen]
        );

        return redirect()->back()->with("success","Item Agregado:". $producto->nomproducto);
    }

    public function checkout(){
        return view('carrito.checkout');
    }
}
