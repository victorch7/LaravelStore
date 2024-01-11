@extends('adminlte::page')

@section('title', 'Zeppelin Store')

@section('content_header')
    <h1 class="titulo">Bienvenido al panel de administrador de Zeppelin Store</h1>

@stop

@section('content')
<!--Estilos-->
<style>

    .titulo{
        text-align: center;
        padding: 5px 25px;
        color: rgb(219, 201, 197 );
    }

    .dashboard-admin{
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        /*height: 100vh;*/
        font-family: consolas;
    }
    
    .btn0{
        font-family: "Roboto", sans-serif;
        font-size: 18px;
        font-weight: bold;
        background: #1717a6;
        width: 210px;
        padding: 25px;
        text-align: center;
        text-decoration: none;
        text-transform: uppercase;
        color: #fff;
        border-radius: 5px;
        cursor: pointer;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
        -webkit-transition-duration: 0.3s;
        transition-duration: 0.5s;
        -webkit-transition-property: box-shadow, transform;
        transition-property: box-shadow, transform;

    }
    

    .btn0:hover, .btn0:focus, .btn0:active{
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        -webkit-transform: scale(1.1);
        transform: scale(1.1);    
    }

    /*--------------------------------------------------- */

    .btn1{
        font-family: "Roboto", sans-serif;
        font-size: 18px;
        font-weight: bold;
        background: #4717a6;
        width: 210px;
        padding: 25px;
        text-align: center;
        text-decoration: none;
        text-transform: uppercase;
        color: #fff;
        border-radius: 5px;
        cursor: pointer;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
        -webkit-transition-duration: 0.3s;
        transition-duration: 0.5s;
        -webkit-transition-property: box-shadow, transform;
        transition-property: box-shadow, transform;

    }

    .btn1:hover, .btn1:focus, .btn1:active{
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        -webkit-transform: scale(1.1);
        transform: scale(1.1);    
    }

    /*--------------------------------------------------- */

    .btn2{
        font-family: "Roboto", sans-serif;
        font-size: 18px;
        font-weight: bold;
        background: #d9943b;
        width: 210px;
        padding: 25px;
        text-align: center;
        text-decoration: none;
        text-transform: uppercase;
        color: #fff;
        border-radius: 5px;
        cursor: pointer;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        -webkit-transition-duration: 0.3s;
        transition-duration: 0.5s;
        -webkit-transition-property: box-shadow, transform;
        transition-property: box-shadow, transform;

    }
    
    .btn2:hover, .btn2:focus, .btn2:active{
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        -webkit-transform: scale(1.1);
        transform: scale(1.1);    
    }

    /*--------------------------------------------------- */

    .btn3{
        font-family: "Roboto", sans-serif;
        font-size: 18px;
        font-weight: bold;
        background: #b8144b;
        width: 210px;
        padding: 25px;
        text-align: center;
        text-decoration: none;
        text-transform: uppercase;
        color: #fff;
        border-radius: 5px;
        cursor: pointer;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        -webkit-transition-duration: 0.3s;
        transition-duration: 0.5s;
        -webkit-transition-property: box-shadow, transform;
        transition-property: box-shadow, transform;

    }
    
    .btn3:hover, .btn3:focus, .btn3:active{
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        -webkit-transform: scale(1.1);
        transform: scale(1.1);    
    }

    /*--------------------------------------------------- */


    .card{
            width: 400px;
            margin: 20px;
            border-radius: 3px;
            overflow: hidden;
            background: #8585a3;
            box-shadow: 0px 2px 50px rgba(0,0,0,0.8);
            cursor: default;
            transition: all 400ms ease;
        }

    .card-body{
        text-align: center;
    }

    .card:hover{
        box-shadow: 0px 1px 10px rgba(0,0,0,0.2);
        transform: translateY(-5%);
    }

    .card img{
        width: 500px;
        height: 400px;
    }

       
</style>
<!--Estilos-->
   <div class="dashboard-admin">
        <a href="/usuarios/listado" class="btn0">
            Usuarios
        </a>

        <a href="/productos/listado" class="btn1">
            Productos
        </a>

        <a href="/clientes/listado" class="btn2">
            Clientes
        </a>

        <a href="/ventas/listado" class="btn3">
            Ventas
        </a>

   </div>

   
   <div class="dashboard-admin">
        <div class="card" >
            <img src="{{ asset('images\Administracion.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Administracion</p>
            </div>
        </div>

        <div class="card">
            <img src="{{ asset('images\Descuentos.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Descuentos</p>
            </div>
        </div>

        <div class="card">
            <img src="{{ asset('images\Analiticas.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Analiticas</p>
            </div>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="/css/admin_custom.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
