@extends('layouts.app')

@section('content')
<div class="container-fluid px-0">
    {{-- Si el usuario está autenticado Y es admin, mostrar el panel admin --}}
    @if ($isAdmin)
        <div class="container mb-5">
            <div class="alert alert-info">
                <h5>Panel de Administrador</h5>
                <p>Como administrador, puedes gestionar los productos desde aquí.</p>
                <a href="{{ route('panel') }}" class="btn btn-primary">Ir al Panel Admin</a>
            </div>
        </div>
    @endif

    {{-- Sección de Productos (visible para TODOS) --}}
    <hr id="productos" class="my-5">

    <div class="container">
        <h2 class="mb-4 text-center">Nuestros Productos</h2>
        
        @empty($products)
            <div class="alert alert-danger text-center">
                Aun no hay productos disponibles, por favor vuelva mas tarde.
            </div>
        @else
            <div class="row">
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