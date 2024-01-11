<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Zeppelin Store</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

        <link href="/node_modules/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
    </head>
    <header>
        <nav class="navbar navbar-expand-lg p-3 --bs-danger-border-subtle" id="barra" style="background: #ef5734;">
          <div class="container-fluid">
              <a class="navbar-brand" href="#"><h3>Zeppelin Store</h3></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                 aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav ms-auto">
                      @if (Route::has('login'))
                          <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                              @auth
                                  <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                              @else
                                  <ul class="navbar-nav">
                                      <li class="nav-item">
                                          <a class="nav-link active" aria-current="page" href="{{ route('login') }}"><h5>Iniciar Sesión</h5></a>
                                      </li>
                                      @if (Route::has('register'))
                                          <li class="nav-item">
                                              <a class="nav-link active" aria-current="page" href="{{ route('register') }}"><h5>Registrarse</h5></a>
                                          </li>
                                      @endif
                                      <li>
                                      <li class="nav-item">
                                          <a class="nav-link active" aria-current="page" href="{{ route('listado_catalogo') }}"><h5>Catalogo</h5></a>
                                      </li>
                                      </li>
                                  </ul>
                              @endauth
                          </div>
                      @endif
                  </div>
              </div>
          </div>
      </nav>
    
    </header>
    <body class="antialiased" style="background: rgb(26, 26, 26);">
    <style>
       * {
        font-family: "Poppins", sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        }

        h1{
            text-align: center;
            padding: 10px;
            color: rgb(219, 201, 197 );
        }
        .descripcion{
            text-align: center;
            padding: 5px 25px;
            color: rgb(219, 201, 197 );
        }

        .card{
            width: 100%;
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 30px;
            align-items: center;
            background: rgb(226, 218, 216 );
            text-align: center;
            cursor: default;
            transition: all 400ms ease;
            
        }
        
        img{
            width: 140px;
            border-radius: 50%;
            box-shadow: 2px 2px 5px rgb(216, 216, 216);
            transform: rotate(-10deg);
            transition: all .3s;
        }
        
        .card:hover{
            box-shadow: 0px 1px 10px rgba(0,0,0,0.2);
            transform: translateY(-5%);
         }

    </style>
       <h1>Nuestro Equipo de Expertos</h1>
       <p class="descripcion">Equipo de desarrolladores de la pagina Zeppelin Store</p>

       <div class="container">
       <div style="display: flex; gap: 20px;">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('images\Victor.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h2>Victor Chacon</h2>
                    <h5>Desarrollador</h5>
                    <p class="card-text">Ingeniero de sistemas de la Universidad De Nariño</p>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="{{ asset('images\Sotelo.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h2>David Sotelo</h2>
                    <h5>Desarrollador</h5>
                    <p class="card-text">Ingeniero de sistemas de la Universidad De Nariño</p>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="{{ asset('images\Jaiver.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h2>Jhon Ramirez</h2>
                    <h5>Desarrollador</h5>
                    <p class="card-text">Ingeniero de sistemas de la Universidad De Nariño</p>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="{{ asset('images\Christian.jpg') }}"" class="card-img-top" alt="...">
                <div class="card-body">
                     <h2>Christian Erazo</h2>
                     <h5>Desarrollador</h5>
                    <p class="card-text">Ingeniero de sistemas de la Universidad De Nariño</p>
                </div>
            </div>
        </div>
       </div><br><br>

    </body>
    <footer style="background: linear-gradient(90deg, #ffcc2f, #ef5734);">
        <div class="container" style="height: 100px;">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto mt-4"><div class=" m-0 text-blcak"><h4>Copyright &copy; Zeppelin Store 2023</h4></div></div>
                <div class="col-auto mt-4"><div class=" m-0 text-blcak"><h4><i class="bi bi-facebook" ></i> Facebook</h4></div></div>
                <div class="col-auto mt-4"><div class=" m-0 text-blcak"><h4><i class="bi bi-whatsapp"></i> +57 3163961118</h4></div></div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>
