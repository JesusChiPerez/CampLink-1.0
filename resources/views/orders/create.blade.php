@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/carrito/order.css') }}">
@endpush

@section('content')

<div class="container order-container">

    <h1 class="order-title">Detalles de mi Orden</h1>

    <h4 class="order-total">
        <strong>Total a pagar:</strong> ${{ $cart->total }}
    </h4>

    <form method="POST" action="{{ route('orders.store') }}">
        @csrf
        <button type="submit" class="order-btn">
            Confirmar pedido
        </button>
    </form>

    <div class="table-responsive order-table">
        <table class="table table-striped mb-0">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($cart->products as $product)
                    <tr>

                        <td>
                            <div class="product-info">
                                <img src="{{ asset($product->images->first()->path) }}" width="80">
                                <span>{{ $product->title }}</span>
                            </div>
                        </td>

                        <td>${{ $product->price }}</td>

                        <td>{{ $product->pivot->quantity }}</td>

                        <td class="product-total">
                            ${{ $product->total }}
                        </td>

                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>

</div>

@include('users.footer')

@endsection