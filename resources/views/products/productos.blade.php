@extends('layouts.app')

@section('content')
<div class="container mt-4">
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
@endsection 