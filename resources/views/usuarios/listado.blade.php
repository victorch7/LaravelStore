@extends('adminlte::page')

@section('title', 'Store')

@section('content_header')

<div class="m-3">
    <h1>Listado de Usuarios</h1>
</div>
@stop

@section('content')

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
                    <a href="{{ route('editar_usuform', $user->id) }}"  class="btn btn-success"><i class="fa fa-lg fa-fw fa-pen"></i>Editar</a>
                    <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#confirmDelete{{ $user->id }}">
                      <i class="fa fa-lg fa-fw fa-trash"></i> Eliminar
                     </a>
                </td>
                @php
                    $i = $i + 1;
                @endphp
            </tr>
            <div class="modal fade" id="confirmDelete{{ $user->id }}" tabindex="-1" aria-labelledby="confirmDeleteLabel{{ $user->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="confirmDeleteLabel{{ $user->id }}">Confirmar Eliminación</h5>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ¿Estás seguro de que deseas eliminar este usuario?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                <a href="{{ route('eliminar_usu', $user->id) }}" class="btn btn-danger">Eliminar</a>
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
