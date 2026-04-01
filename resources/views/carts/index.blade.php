@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/carrito/carts.css') }}">
@endpush

@section('content')

<div class="container cart-container">

    <h1 class="cart-title">Tu carrito de compras</h1>

    @if (!isset($cart) || $cart->products->isEmpty())

        <div class="alert alert-warning cart-empty">
            Tu carrito está vacío.
        </div>

    @else

        <h4 class="cart-total">
            <strong>Total: </strong> ${{ $cart->total }}
        </h4>

        <a class="cart-btn" href="{{ route('orders.create') }}">
            Iniciar pedido
        </a>

        <div class="row cart-grid">
            @foreach ($cart->products as $product)
                <div class="col-md-3 col-sm-6 mb-4">
                    @include('components.product-card')
                </div>
            @endforeach
        </div>

    @endif

</div>

@include('users.footer')

@endsection