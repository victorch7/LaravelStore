@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')
    <h1 class="text-warning text-center">Editar Usuario</h1>
@stop

@section('content_header')
@stop

@section('content')
<div class="container bg-dark rounded p-5 mb-3 border border-warning">
    <form action="{{url('/usuarios/edicion', $usuario->id)}}" method="POST">
    @csrf
        <div class="row">
            <div class="col mb-3">
                <label for="nom_producto" class="form-label">Nombre Usuario</label>
                <div class="input-group">
                    <span class="input-group-text bg-warning"><i class="bi bi-person-fill-gear"></i></span>
                    <input type="text" class="form-control border border-dark" id="nom_usuario" name="nom_usuario" value="{{$usuario->name}}" required>
                </div>
            </div>  
            <div class="col mb-3">
                <label for="nom_producto" class="form-label">Correo Electronico</label>
                <div class="input-group">
                    <span class="input-group-text bg-warning"><i class="bi bi-envelope-at-fill"></i></span>
                    <input type="text" class="form-control border border-dark" id="correo" name="correo" value="{{$usuario->email}}" required>
                </div>
            </div>  
        </div>

        <div class="row">
            <div class="col mb-3">
                <label for="nom_producto" class="form-label">Contraseña</label>
                <div class="input-group">
                    <span class="input-group-text bg-warning"><i class="bi bi-bag"></i></span>
                    <input type="text" class="form-control border border-dark" id="contraseña" name="contraseña"
                     placeholder="Ingrese su nueva contraseña" minlength="8" required>
                </div>
            </div>  
        </div>
      
        
        <button type="submit" class="btn btn-success mt-3"><i class="bi bi-floppy-fill"></i> Guardar Cambios</button>
        <a href="/usuarios/listado" type="submit" class="btn btn-warning mt-3"><i class="bi bi-arrow-left-square-fill"></i> Regresar</a>
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

        /* Cambia el color del placeholder de la contraseña */
        #contraseña::placeholder {
            color: #888; 
        }
    </style>

@endsection

@section('js')
<!-- Scripts de Bootstrap, jQuery y Popper.js (opcional) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

@endsection