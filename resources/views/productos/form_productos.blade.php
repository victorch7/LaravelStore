@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')
    <h1 class="text-warning text-center">Registro de Productos</h1>
@stop

@section('content')
<div class="container bg-dark rounded p-5 mb-3 border border-warning">
<form action="{{route('registrar_producto')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
        <div class="col mb-3">
            <label for="cod_producto" class="form-label">Referencia Producto</label>
            <div class="input-group">
            <span class="input-group-text bg-warning"><i class="bi bi-dice-5-fill heading"></i></span>
                <input type="number" class="form-control border border-dark" id="cod_producto"  name="cod_producto" min="1000" max="9999" value="{{ $valorConsecutivo }}">
            </div>
        </div>
        <div class="col mb-3">
            <label for="nom_producto" class="form-label">Nombre Producto</label>
            <div class="input-group">
                <span class="input-group-text bg-warning"><i class="bi bi-box-fill heading"></i></span>
                <input type="text" class="form-control border border-dark" id="nom_producto" name="nom_producto" required>
            </div>
        </div>  
        </div>
      
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea class="form-control border border-dark" id="descripcion" name="descripcion" rows="3" required></textarea>
        </div>            
        <div class="row">
        <div class="col-6 mb-3">
             <label for="imagen" class="form-label">Seleccione una foto para el producto</label>
            <div class="input-group">
                <span class="input-group-text bg-warning"><i class="bi bi-cloud-arrow-up-fill heading"></i></span>
                <input class="form-control border border-dark" type="file" id="imagen" name="imagen" required>
            </div>
        </div>
        </div>
        <div class="row">
        <div class="col mb-3">
            <label for="precio" class="form-label">Precio Unitario</label>
            <div class="input-group">
                <span class="input-group-text bg-warning"><i class="bi bi-currency-dollar heading"></i></span>
                <input type="number" class="form-control border border-dark" id="precio" name="precio" aria-label="Precio" required>
            </div>
        </div>
        <div class="col mb-3">
            <label for="stock" class="form-label">Cantidad</label>
            <div class="input-group">
                <span class="input-group-text bg-warning"><i class="bi bi-box-fill heading"></i></span>
                <input type="number" class="form-control border border-dark" id="stock" name="stock" required>
            </div>
        </div>
        </div>
        <button type="submit" class="btn btn-success mt-3"><i class="bi bi-floppy-fill"></i> Registrar Producto</button>
        <a href="/productos/listado" type="submit" class="btn btn-warning mt-3"><i class="bi bi-arrow-left-square-fill"></i> Regresar</a>
</form>
</div>
 

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

@stop

@section('js')
<!-- Scripts de Bootstrap, jQuery y Popper.js (opcional) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

@endsection