@extends('layouts.app')

@section('content')
{{-- Cargamos el CSS específico que creaste para esta sección --}}
<link href="{{ asset('css/ofertas.css') }}" rel="stylesheet">
<link href="{{ asset('css/publicate.css') }}" rel="stylesheet">
<link href="{{ asset('css/aprovecha.css') }}" rel="stylesheet">
<link href="{{ asset('css/footer.css') }}" rel="stylesheet">

<div class="container-fluid px-0">
    <div class="row align-items-center g-0 mb-5 bg-light">
        <div class="col-md-6">
            <img src="{{ asset('img/bienvenida/banner-bienvenida.png') }}" alt="Producción Agrícola" class="img-fluid w-100 shadow-sm">
        </div>
        <div class="col-md-6 px-5 py-4">
            <h1 class="display-4 fw-bold">Bienvenido a tu tienda agrícola ideal!</h1>
            <p class="lead mt-3">
                En Campliink conectamos directamente a productores agrícolas con consumidores, eliminando intermediarios y promoviendo un comercio más justo, transparente y accesible. Nuestra plataforma está diseñada para impulsar la economía local, ofreciendo productos frescos, de calidad y a precios competitivos. Descubre una nueva forma de comprar, donde apoyas a quienes trabajan la tierra y recibes lo mejor directamente hasta ti.
            </p>
            {{--  CAMBIO: Usar route('tienda') en lugar de route('products.index') --}}
            <a href="{{ route('tienda') }}" class="btn btn-success btn-lg px-4 mt-3">Comprar ahora</a>
        </div>
    </div>

    <div class="container mb-5 text-center">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('img/bienvenida/maiz.jpeg') }}" class="img-category mb-2" alt="Maíz">
                <h5>Maíz</h5>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('img/bienvenida/frijol.jpg') }}" class="img-category mb-2" alt="Frijol">
                <h5>Frijol</h5>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('img/bienvenida/rabano.jpg') }}" class="img-category mb-2" alt="Rábano">
                <h5>Rábano</h5>
            </div>
        </div>
    </div>

    @include('users.ofertas-secciones')
    @include('users.publicate-seccion')
    @include('users.aprovecha-seccion')
    @include('users.footer')
</div>
@endsection