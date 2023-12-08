@extends('adminlte::page')

@section('title', 'Store')

@section('content_header')

<div class="m-3">
    <h1>Listado de Usuarios</h1>
</div>
@stop

@section('content')

    <div class="container m-2">
        <a href="" class="btn btn-info"><i class="fa fa-lg fa-fw fa-guitar"></i>Agregar</a>
    </div>

    <div class="m-3 bg-secondary p-3" style="border-radius: 8px;">
    <table class="table" id="tabla">
        <thead class="table-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody class="table-dark">
            @php
                $i = 1;
            @endphp
            @foreach($users as $user)
            <tr>
                <th scope="row">{{$i}}</th>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>

                <td>
                    <a href=""  class="btn btn-success"><i class="fa fa-lg fa-fw fa-pen"></i>Editar</a>
                    <a href="" class="btn btn-danger"><i class="fa fa-lg fa-fw fa-trash"></i>Eliminar</a>
                </td>
                @php
                    $i = $i + 1;
                @endphp
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
 
@stop

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

    <!-- Cargamos el idioma español directamente desde el CDN de DataTables -->
    <script src="https://cdn.datatables.net/plug-ins/1.13.7/i18n/Spanish.json"></script>

    <script>
        $(document).ready(function() {
            $('#tabla').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.13.7/i18n/Spanish.json"
                }
            });
        });
    </script>
@endsection
