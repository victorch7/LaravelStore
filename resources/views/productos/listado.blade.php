@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')

<div class="m-3">
<h1 class="text-warning text-center moving-text"><i class="bi bi-emoji-sunglasses-fill"></i> Listado de Productos - Zeppelin Store <i class="bi bi-suit-heart fa-heading"></i></h1>
</div>
@stop

@section('content')

    <div class="container m-2">
        <a href="{{route('formulario_agregar_producto')}}" class="btn btn-info"><i class="fa fa-lg fa-fw fa-guitar"></i>Agregar</a>
    </div>
           <!-- Modal para editar -->
        <div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Contenido del modal -->
                    <div class="modal-body">
                        <!-- Aquí se cargarán los datos del producto -->
                        <h5>Datos del Producto</h5>
                        <div id="datosProducto">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="m-3 bg-secondary p-3" style="border-radius: 8px;">
    <table class="table" id="tabla-productos">
        <thead class="table-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>
            <th scope="col">Imagen</th>
            <th scope="col">Precio</th>
            <th scope="col">Stock</th>
            <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody class="table-dark">
            @php
                $i = 1;
            @endphp
            @foreach($producto as $prod)
            <tr>
                <th scope="row">{{$i}}</th>
                <td>{{ $prod->codproducto }}</td>
                <td>{{ $prod->nomproducto }}</td>
                <td>{{ $prod->descripcion }}</td>
                <td><img src="{{ asset($prod->imagen) }}" alt="Imagen del producto..." class="expand-on-hover" style="max-width: 100px; max-height: 70px; border-radius: 8px;"></td>
                <td>${{ $prod->precio }}</td>
                <td>{{ $prod->stock }}</td>
                <td>
                    
                <a href="{{ route('editar_prodform', $prod->codproducto) }}" class="btn btn-success"><i class="fa fa-lg fa-fw fa-pen"></i> Editar</a>
                <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#confirmDelete{{ $prod->codproducto }}">
                    <i class="fa fa-lg fa-fw fa-trash"></i> Eliminar
                </a>
                <!-- <a href="{{ route('eliminar_prod', $prod->codproducto) }}" class="btn btn-danger"><i class="fa fa-lg fa-fw fa-trash"></i>Eliminar</a> -->
                </td>
                @php
                    $i = $i + 1;
                @endphp
            </tr>
            <div class="modal fade" id="confirmDelete{{ $prod->codproducto }}" tabindex="-1" aria-labelledby="confirmDeleteLabel{{ $prod->codproducto }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteLabel{{ $prod->codproducto }}">Confirmar Eliminación</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Estás seguro de que deseas eliminar este producto?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <a href="{{ route('eliminar_prod', $prod->codproducto) }}" class="btn btn-danger">Eliminar</a>
            </div>
        </div>
    </div>
</div>
            @endforeach
        </tbody>
    </table>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
@stop
<style>
@keyframes moveLeftRight {
    0% {
        transform: translateX(100%); /* Comienza completamente fuera del área visible en la derecha */
    }
    100% {
        transform: translateX(-100%); /* Termina completamente fuera del área visible hacia la izquierda */
    }
}

.moving-text {
    animation: moveLeftRight 12s linear infinite;
    white-space: nowrap;
    overflow: hidden;
}
</style>


@section('js')
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready( function () {
            $('#tabla-productos').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish.json"
                }
            });;
        });

    </script>
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
            transform: scale(4.8); /* Cambiamos la escala al 120% al pasar el mouse */
        }
    </styles>
    
@stop