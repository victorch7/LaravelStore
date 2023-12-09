<?php

namespace App\Http\Controllers\Tienda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product; //Se importa el modelo

class Productos extends Controller
{

    //Lista los productos
    public function index(){
        $producto = DB::table('productos')->get();
        return view('productos.listado', ['producto' => $producto]);
    }

    //Rutas para añadir productos por el Admin
    public function form_productos(){
        //Trae el codigo consecutivo al ultimo registrado
        $ultimoProducto = Product::latest()->first();
        $valorConsecutivo = $ultimoProducto ? $ultimoProducto->codproducto + 1 : 1;

        return view('productos.form_productos',  ['valorConsecutivo' => $valorConsecutivo]);
    }

    //Metodo para guardar los productos por el Admin
    public function registrar(Request $request){ 
         $producto = new Product();
         $producto->codproducto = $request->input('cod_producto');
         $producto->nomproducto = $request->input('nom_producto');
         $producto->descripcion = $request->input('descripcion');

         $producto->imagen = $request->input('imagen');

                // Manejo de la imagen
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $destinationPath = 'images/';
            $filename = time() . '-' . $imagen->getClientOriginalName();
            $uploadSucces = $request->file('imagen')->move($destinationPath, $filename);
            $producto->imagen = $destinationPath . $filename;
        } else {
            // Si no se proporciona una imagen, asigna un valor predeterminado o nulo, dependiendo de tu estructura de base de datos
            $producto->imagen = null; // o $producto->imagen = 'images/default.jpg';
        }

         $producto->precio = $request->input('precio');
         $producto->stock = $request->input('stock');
         $producto->save();
         return redirect()->route('listado_productos');
    }

        //Para Editar por el Admin
        public function form_edicion($id){
            $producto = Product::findorFail($id); //manda a buscar
            return view('productos.form_edicion', ['producto'=>$producto]);       
        }
    
        
        public function editar(Request $request, $id ){
            $producto = Product::findorFail($id); //manda a buscar
            $producto->nomproducto = $request->input('nom_producto');
            $producto->descripcion = $request->input('descripcion');

            // Verifica si se está enviando una nueva imagen y actualiza la propiedad de la imagen
            if ($request->hasFile('imagen')) {
                // Procesa la nueva imagen si se ha enviado en el formulario
                $imagen = $request->file('imagen');
                $nombreArchivo = time() . '_' . $imagen->getClientOriginalName();
                $rutaImagen = $imagen->storeAs('public/images', $nombreArchivo);
                $producto->imagen = 'images/' . $nombreArchivo;
            }

                    $producto->precio = $request->input('precio');
                    $producto->stock = $request->input('stock');
                    $producto->save();
            
                    return redirect()->route('listado_productos');
        }

        //Para eliminar por el Admin
        public function eliminar($id){
            $producto = Product::findorFail($id); //manda a buscar
            //echo $producto;
            $producto->delete();
            return redirect()->route('listado_productos');       
        }
    
}
