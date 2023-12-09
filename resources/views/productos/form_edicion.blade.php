@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')
    <h1 class="text-warning text-center">Actualizar Productos</h1>
@stop

@section('content_header')
@stop

@section('content')
<div class="container bg-dark rounded p-5 mb-3 border border-warning">
    <form action="{{url('/productos/edicion', $producto->codproducto)}}" method="POST">
    @csrf
        <div class="row">
        <div class="col mb-3">
            <label for="cod_producto" class="form-label">Referencia Producto</label>
            <div class="input-group">
            <span class="input-group-text bg-warning"><i class="bi bi-dice-5-fill heading"></i></span>
                <input type="number" class="form-control border border-dark" id="cod_producto"  name="cod_producto" min="1000" max="9999" value="{{$producto->codproducto}}" disabled>
            </div>
        </div>
        <div class="col mb-3">
            <label for="nom_producto" class="form-label">Nombre Producto</label>
            <div class="input-group">
                <span class="input-group-text bg-warning"><i class="bi bi-box-fill heading"></i></span>
                <input type="text" class="form-control border border-dark" id="nom_producto" name="nom_producto" value="{{$producto->nomproducto}}" required>
            </div>
        </div>  
        </div>
      
        <div class="mb-5">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea class="form-control border border-dark" id="descripcion" name="descripcion" rows="3" required>{{$producto->descripcion}}</textarea>
        </div>            
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="imagen" class="form-label">Seleccione una foto para el producto</label>
                <div class="input-group">
                    <span class="input-group-text bg-warning"><i class="bi bi-cloud-arrow-up-fill heading"></i></span>
                    <input class="form-control border border-dark" type="file" id="imagen" name="imagen" required>
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <label for="imagen" class="form-label">Imagen Actual</label>
                <div class="input-group">
                    <img src="{{ asset($producto->imagen) }}" class="expand-on-hover" alt="Imagen actual" style="max-width: 100px; max-height: 100px;">
                </div>
            </div>
    </div>

        <div class="row">
        <div class="col mb-3 mt-5">
            <label for="precio" class="form-label">Precio Unitario</label>
            <div class="input-group">
                <span class="input-group-text bg-warning"><i class="bi bi-currency-dollar heading"></i></span>
                <input type="number" class="form-control border border-dark" id="precio" name="precio" aria-label="Precio" value="{{$producto->precio}}" required>
            </div>
        </div>
        <div class="col mb-3 mt-5">
            <label for="stock" class="form-label">Cantidad</label>
            <div class="input-group">
                <span class="input-group-text bg-warning"><i class="bi bi-box-fill heading"></i></span>
                <input type="number" class="form-control border border-dark" id="stock" name="stock" value="{{$producto->stock}}" required>
            </div>
        </div>
        </div>
        <button type="submit" class="btn btn-success mt-3"><i class="bi bi-floppy-fill"></i> Guardar Cambios</button>
        <a href="/productos/listado" type="submit" class="btn btn-warning mt-3"><i class="bi bi-arrow-left-square-fill"></i> Regresar</a>
    </form> 
</div>
@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        /* Estilos para la imagen */
        .expand-on-hover {
            max-width: 800px;
            max-height: 800px;
            border-radius: 8px;
            transition: transform 0.3s ease-in-out; /* Agregamos una transición para que sea suave */
        }

        /* Efecto de escala al pasar el mouse por encima */
        .expand-on-hover:hover {
            transform: scale(3.0); /* Cambiamos la escala al 120% al pasar el mouse */
        }
    </style>

@endsection

@section('js')
<!-- Scripts de Bootstrap, jQuery y Popper.js (opcional) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

@endsection