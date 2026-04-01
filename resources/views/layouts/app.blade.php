<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/bansup.css') }}" rel="stylesheet">

<link href="{{ asset('css/footer.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<head>
     @stack('styles')
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
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="acercaDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Acerca de
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="acercaDropdown">
                                <li>
                                    <a class="dropdown-item" href="{{ route('historia') }}">
                                        Historia
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('misionvision') }}">
                                        Misión y Visión
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('valores') }}">
                                        Valores
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            {{-- CAMBIO: Usar route('tienda') en lugar de route('products.index') --}}
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
                            {{-- CAMBIO: Usar route('tienda') en lugar de route('products.index') --}}
                            <form action="{{ route('tienda') }}" method="GET" class="d-flex">
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">
                                        <i class="bi bi-search"></i> </span>
                                    <input name="search" class="form-control border-start-0 bg-light" type="search"
                                        placeholder="Buscar producto" aria-label="Search">
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
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }}
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

<style>
/* ============================= */
/*  Barra superior (oferta) */
/* ============================= */
.top-announcement-bar {
    background: linear-gradient(135deg, #28a745, #1e7e34);
    color: #fff;
    text-align: center;
    font-weight: 500;
    padding: 8px 0;
    font-size: 0.9rem;
}

/* ============================= */
/*  NAVBAR */
/* ============================= */
.navbar {
    border-bottom: 1px solid #eee;
    transition: all 0.3s ease;
}

.navbar-brand {
    font-weight: bold;
    font-size: 1.4rem;
    color: #28a745 !important;
}

/* Links */
.navbar-nav .nav-link {
    font-weight: 500;
    margin-right: 10px;
    transition: all 0.3s ease;
}

.navbar-nav .nav-link:hover {
    color: #28a745 !important;
}

/* Panel admin destacado */
.navbar-nav .nav-link.text-primary {
    font-weight: bold;
    color: #28a745 !important;
}

/* ============================= */
/*  DROPDOWN */
/* ============================= */
.dropdown-menu {
    border-radius: 12px;
    border: none;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    padding: 10px;
}

.dropdown-item {
    border-radius: 8px;
    transition: all 0.2s ease;
}

.dropdown-item:hover {
    background: #f1fdf5;
    color: #28a745;
}

/* ============================= */
/*  BUSCADOR */
/* ============================= */
.input-group {
    border-radius: 10px;
    overflow: hidden;
}

.input-group-text {
    border-radius: 10px 0 0 10px;
}

.input-group .form-control {
    border-radius: 0 10px 10px 0;
}

.input-group .form-control:focus {
    box-shadow: none;
    border-color: #28a745;
}

/* ============================= */
/* 👤 AVATAR */
/* ============================= */
.navbar img.rounded-circle {
    object-fit: cover;
    border: 2px solid #28a745;
    transition: all 0.3s ease;
}

.navbar img.rounded-circle:hover {
    transform: scale(1.05);
}

/* ============================= */
/* 🔔 ALERTAS */
/* ============================= */
.alert {
    border-radius: 12px;
    margin: 15px auto;
    max-width: 900px;
}

/* Success */
.alert-success {
    background: #e8f5e9;
    color: #1e7e34;
    border: none;
}

/* Error */
.alert-danger {
    background: #fdecea;
    color: #dc3545;
    border: none;
}

/* ============================= */
/*  MAIN CONTENT */
/* ============================= */
main {
    min-height: 70vh;
}

/* ============================= */
/*  RESPONSIVE */
/* ============================= */
@media (max-width: 768px) {

    .navbar-nav {
        text-align: center;
    }

    .input-group {
        width: 100%;
    }

    .navbar-brand {
        font-size: 1.2rem;
    }
}
</style>