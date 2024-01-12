<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Catálogo de Productos</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<style>
    body {
        background-color: #0a0a0a;
        margin: 0;
        padding: 0;
        font-family: 'Arial', sans-serif;
    }

    .navbar {
        background-color: #333333;
        padding: 10px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .logo {
        color: #ff4500;
        font-size: 24px;
        font-family: 'Rock Salt', cursive;
        text-transform: uppercase;
        text-decoration: none;
    }

    .search-form {
        display: flex;
        align-items: center;
    }

    .search-input {
        padding: 8px;
        margin-right: 10px;
        border: 1px solid #ff4500;
        border-radius: 5px;
        color: #ff4500;
        background-color: #333333;
        font-family: 'Arial', sans-serif;
    }

    .search-button {
        background-color: #ff4500;
        color: #000000;
        border: 2px solid #ff4500;
        border-radius: 5px;
        padding: 8px 15px;
        cursor: pointer;
        transition: background-color 0.3s ease-in-out;
        text-transform: uppercase;
    }

    .search-button:hover {
        background-color: #000000;
        color: #ff4500;
    }

    .container {
        color: #ffffff;
        padding: 20px;
        text-align: center;
    }

    .rock-title {
        font-size: 42px;
        font-family: 'Rock Salt', cursive;
        color: #ff4500;
        text-transform: uppercase;
        letter-spacing: 3px;
        margin-bottom: 30px;
    }


    .larger-image {
        display: none;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        max-width: 95%;
        max-height: 95%;
        z-index: 1;
    }

   

    button {
        background-color: #ff4500;
        color: #000000;
        border: 2px solid #ff4500;
        border-radius: 5px;
        padding: 8px 15px;
        cursor: pointer;
        transition: background-color 0.3s ease-in-out;
        text-transform: uppercase;
    }

    button:hover {
        background-color: #000000;
        color: #ff4500;
    }
</style>

<div class="navbar">
    <a href="#" class="logo">Zeppelin Store</a>
    <form class="search-form">
        <input class="search-input" type="search" placeholder="Search" aria-label="Search">
        <button class="search-button" type="submit">Search</button>
    </form>
</div>

<div class="container">
    <h1 class="rock-title">Carrito de compras</h1>
    <div class="row justify-content-center">
       <div class="card">
            <div class="card-body">
                @if (Cart::count())
                    <table class="table table-striped">
                        <thead>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>CANTIDAD</th>
                            <th>PRECIO UNITARIO</th>
                            <th>IMPORTE</th>
                        </thead>
                        <tbody>
                            @foreach (Cart::content() as $prod)
                                <tr class="align-middle">
                                    
                                    <td><img src='{{ asset($prod->imagen) }}' width="50"></td>
                                    <td>{{$prod->nomproducto}}</td>
                                    <td>{{$prod->stock}}</td>
                                    <td>{{number_format($prod->precio)}}</td>
                                    <td>{{number_format($prod->stock * $prod->precio, 2)}}</td>
                                    <td>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <a href="/" class="text-center">Agrega un producto</a>
                @endif
            </div>
       </div>

      
    </div>
</div>





