@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/productos.css') }}">
@endpush

@section('content')

<div class="container-fluid px-0 productos-container">

    {{-- PANEL ADMIN --}}
    @if ($isAdmin)
        <div class="container mb-5">
            <div class="admin-panel">
                <h5>Panel de Administrador</h5>
                <p>Como administrador, puedes gestionar los productos desde aquí.</p>

                <a href="{{ route('panel') }}" class="admin-btn">
                    Ir al Panel Admin
                </a>
            </div>
        </div>
    @endif

    {{-- PRODUCTOS --}}
    <hr id="productos" class="my-5">

    <div class="container">
        <h2 class="productos-title">Nuestros Productos</h2>
        
        @empty($products)
            <div class="alert no-productos text-center">
                Aun no hay productos disponibles, por favor vuelva mas tarde.
            </div>
        @else
            <div class="row productos-grid">
                @foreach ($products as $product)
                    <div class="col-md-3 mb-4">
                        @include('components.product-card')
                    </div>
                @endforeach
            </div>
        @endempty
    </div>

</div>

@include('users.footer')

@endsection