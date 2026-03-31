@extends('layouts.app')

@section('content')
    <h1>Detalles del Pago</h1>
    <h4 class="text-center"><strong>Total a pagar: </strong>{{ $order->total }}</h4>



    <div class="text-center mb-3">
        <form class="d-inline" method="POST" action="{{ route('orders.payments.store', ['order' => $order->id]) }}">
            @csrf
            <button type="submit" class="btn btn-success">Pagar</button>
        </form>
    </div>
    <br>
    @include('users.footer')
@endsection
