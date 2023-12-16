@extends('adminlte::page')

@section('title', 'Store')

@section('content_header')

<div class="m-3">
    <h1>Listado de Clientes</h1>
</div>
@stop

@section('content')

   
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

    <!-- <script>
        $(document).ready(function() {
            $('#tabla').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.13.7/i18n/Spanish.json"
                }
            });
        });
    </script> -->
@endsection
