@extends('layouts.app')

@section('content')
    <h1>Tu carrito de compras</h1>
    @if (!isset($cart) || $cart->products->isEmpty())
        <div class="alert alert-warning">
            Tu carrito está vacío.
        </div>
    @else
        <h4 class="text-center"><strong>Tu total en el carrito: </strong>{{ $cart->total }}</h4>
        <a class="btn btn-success mb-3" href="{{ route('orders.create') }}">Iniciar pedido</a>
        <div class="row">
            @foreach ($cart->products as $product)
                <div class="col-3">
                    @include('components.product-card')
                </div>
            @endforeach
        </div>
    @endif
    <br>
    @include('users.footer')
@endsection
