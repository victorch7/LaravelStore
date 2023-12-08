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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
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
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
              <div class="col-lg-8 col-xl-7 col-xxl-6">
                <div class="my-5 text-center text-xl-start">
                  <h1 class="display-5 fw-bolder text-white mb-2">¿Quienes somos?</h1>
                  <p class="lead fw-normal text-white-50 mb-4">¡Bienvenido a Zeppelin Store!, aqui encontraras gran variedad de accesorios.</p>
                  <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                    <a class="btn btn-warning btn-lg px-4 me-sm-3" href="{{ route('login') }}">Comenzar</a>
                  </div>
                </div>
              </div>
              <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5"
                  src="{{ asset('images\logo-zeppelin.png') }}" alt="..." /></div>
            </div>
          </div>

          <section class="py-5 text-black-30" style="background: linear-gradient(90deg, #ffcc2f, #ef5734);">
            <div class="container px-5 my-5">
              <div class="row gx-5">
                <div class="col-lg-4 mb-5 mb-lg-0">
                  <h2 class="fw-bolder mb-0">Algunos de nuestros productos</h2>
                </div>
                <div class="col-lg-8"><br>
                  <div class="row gx-5 row-cols-1 row-cols-md-2">
                    <div class="col mb-5 h-100">
                      <h1 class="h4"><i class="bi bi-arrow-through-heart-fill text-danger"></i> Estampados personalizados</h1>
                    </div>
                    <div class="col mb-5 mb-md-0 h-100">
                        <h1 class="h4"><i class="bi bi-radioactive text-warning"></i> Piercings</h1>
                    </div>
                    <div class="col mb-5 mb-md-0 h-100">
                        <h1 class="h4"><i class="bi bi-fire text-danger"></i> Accesorios para fumar</h1>
                    </div>
                    <div class="col mb-5 mb-md-0 h-100">
                        <h1 class="h4"><i class="bi bi-shield-fill-check text-warning"></i> Emblemas y parches</h2>
                    </div>
                    <div class="col mb-5 mt-5 mb-md-0 h-100">
                        <h1 class="h4"><i class="bi bi-emoji-sunglasses-fill text-danger"></i> Camisietas y gorras</h2>
                    </div>
                    <div class="col mb-5 mt-5 mb-md-0 h-100">
                        <h1 class="h4"><i class="bi bi-award-fill text-warning"></i> Joyería</h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <div class="py-3 text-white" style="background: rgb(26, 26, 26);">
            <div class="container px-4 my-3">
              <div class="row gx-5 justify-content-center">
                <div class="col-lg-10 col-xl-7">
                  <div class="text-center">
                    <div class="fs-4 mb-4 fst-italic">En Zeppelin Store te ofrecemos todo lo relacionado en accesorios y artículos para rockeros, metaleros y demas...</div>
                  </div>
                  <div class="text-center"><img class="img-fluid"
                    src="{{ asset('images/info_store.jpg') }}" alt="..." /></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

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
