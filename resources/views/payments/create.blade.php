@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/carrito/payments.css') }}">
@endpush

@section('content')

<div class="container payment-container">

    <div class="payment-card">

        <div class="payment-header">
            Detalles del Pago
        </div>

        <div class="payment-body">

            <div class="payment-total">
                <strong>Total a pagar:</strong><br>
                ${{ $order->total }}
            </div>

            <form method="POST"
                action="{{ route('orders.payments.store', ['order' => $order->id]) }}">
                @csrf

                <button type="submit" class="payment-btn">
                    Pagar ahora
                </button>
            </form>

            <div class="payment-note">
                Tu pago será procesado de forma segura.
            </div>

        </div>

    </div>

</div>

@include('users.footer')

@endsection