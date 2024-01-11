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

    .card {
        background-color: #333333;
        color: #ffffff;
        border: 2px solid #000000;
        border-radius: 10px;
        margin-bottom: 20px;
        width: 25rem;
        display: inline-block;
        margin-right: 10px;
        position: relative;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        transition: box-shadow 0.3s ease-in-out;
    }

    .card:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.5);
    }

    .card img {
        height: 300px; 
        object-fit: cover;
        border-bottom: 1px solid #000000;
        width: 100%;
        transition: transform 0.3s ease-in-out;
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

    .card:hover img {
        transform: scale(1.1);
    }

    .card-body {
        padding: 15px;
    }

    .card-title {
        color: #ff4500;
        font-size: 20px;
        margin-top: 10px;
        text-transform: uppercase;
    }

    .card-text {
        color: #cccccc;
        text-transform: uppercase;
    }

    .card-description {
        margin-bottom: 10px;
    }

    .card-price {
        font-size: 20px;
        font-weight: bold;
        text-transform: uppercase;
        color: #ff4500;
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
    <h1 class="rock-title">Catálogo de Productos</h1>
    <div class="row">
        @foreach($producto as $index => $prod)
            @if($index % 3 == 0)
                </div><div class="row">
            @endif
            <div class="col-4">
                <div class="card">
                    <img class="card-img-top" src='{{ asset($prod->imagen) }}' alt="Card image cap">
                    <div class="larger-image">
                        <img src='{{ asset($prod->imagen) }}' alt="Larger Preview">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{$prod->nomproducto}}</h5>
                        <p class="card-description card-text">{{$prod->descripcion}}</p>
                        <p class="card-price card-text"><b>precio: $ </b>{{$prod->precio}}</p>
                        <button>Agregar</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>





