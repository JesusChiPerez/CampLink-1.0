<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/bansup.css') }}" rel="stylesheet">
<link href="{{ asset('css/footer.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CAMPLINK</title>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="top-announcement-bar">
        Ven y Disfruta nuestros miercoles de 20% de descuento en TODA la tienda
    </div>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    CAMPLINK
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">¿Quienes Somos?</a>
                        </li>
                        <li class="nav-item">
                            {{--  CAMBIO: Usar route('tienda') en lugar de route('products.index') --}}
                            <a class="nav-link" href="{{ route('tienda') }}">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Oferta</a>
                        </li>
                        <li class="nav-item">
                            @inject('cartService', 'App\Services\CartService')
                            <a class="nav-link" href="{{ route('carts.index') }}">
                                Mis Compras ({{ $cartService->countProducts() }})
                            </a>
                        </li>
                        
                        @if (optional(auth()->user())->isAdmin())
                            <li class="nav-item">
                                <a class="nav-link text-primary" href="{{ route('panel') }}">Panel Admin</a>
                            </li>
                        @endif
                    </ul>

                    <ul class="navbar-nav ms-auto align-items-center">
                        <li class="nav-item me-3">
    {{--  CAMBIO: Usar route('tienda') en lugar de route('products.index') --}}
    <form action="{{ route('tienda') }}" method="GET" class="d-flex">
        <div class="input-group">
            <span class="input-group-text bg-light border-end-0">
                <i class="bi bi-search"></i> </span>
            <input name="search" class="form-control border-start-0 bg-light" type="search" placeholder="Buscar producto" aria-label="Search">
        </div>
    </form>
</li>

                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img class="rounded-circle" width="40" height="40"
                                        src="{{ asset(Auth::user()->profile_image) }}" alt="{{ Auth::user()->name }}">
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container-fluid">
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif

                @if (isset($errors) && $errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @yield('content')
            </div>
        </main>
    </div>
</body>

</html>