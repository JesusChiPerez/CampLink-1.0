@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/ofertas-secc.css') }}">
@endpush

@section('content')

{{-- ================= BANNER ================= --}}
<div class="ofertas-banner">
    <h2>Ofertas del Día</h2>
</div>

{{-- ================= CATEGORÍAS ================= --}}
<div class="categoria-filtros text-center">
    <button class="btn-categoria active" data-category="all">Todos</button>
    <button class="btn-categoria" data-category="frutas">Frutas</button>
    <button class="btn-categoria" data-category="verduras">Verduras</button>
    <button class="btn-categoria" data-category="semillas">Semillas</button>
</div>

<div class="container-fluid mt-4">
    <div class="row">

        {{-- ================= FILTROS ================= --}}
        <div class="col-md-2 filtros-sidebar">
            <h5>Filtros</h5>

            <div class="filtro-group">
                <label>Precio</label>
                <input type="number" id="precio-min" placeholder="Min">
                <input type="number" id="precio-max" placeholder="Max">
            </div>

            <div class="filtro-group">
                <label>Buscar</label>
                <input type="text" id="buscar" placeholder="Producto...">
            </div>
        </div>

        {{-- ================= PRODUCTOS ================= --}}
        <div class="col-md-10">
            <div class="row" id="productos-container">

                {{-- FRUTAS --}}
                <div class="col-md-3 producto-item" data-category="frutas" data-price="15">
                    <div class="card producto-card">
                        <img src="{{ asset('img/products/1.jpg') }}">
                        <div class="card-body">
                            <h5>Manzana</h5>
                            <span>$15</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 producto-item" data-category="frutas" data-price="20">
                    <div class="card producto-card">
                        <img src="{{ asset('img/products/2.jpg') }}">
                        <div class="card-body">
                            <h5>Sandía</h5>
                            <span>$20</span>
                        </div>
                    </div>
                </div>

                {{-- VERDURAS --}}
                <div class="col-md-3 producto-item" data-category="verduras" data-price="10">
                    <div class="card producto-card">
                        <img src="{{ asset('img/products/3.jpg') }}">
                        <div class="card-body">
                            <h5>Zanahoria</h5>
                            <span>$10</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 producto-item" data-category="verduras" data-price="12">
                    <div class="card producto-card">
                        <img src="{{ asset('img/products/4.jpg') }}">
                        <div class="card-body">
                            <h5>Lechuga</h5>
                            <span>$12</span>
                        </div>
                    </div>
                </div>

                {{-- SEMILLAS --}}
                <div class="col-md-3 producto-item" data-category="semillas" data-price="8">
                    <div class="card producto-card">
                        <img src="{{ asset('img/products/5.jpg') }}">
                        <div class="card-body">
                            <h5>Semillas de Maíz</h5>
                            <span>$8</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 producto-item" data-category="semillas" data-price="18">
                    <div class="card producto-card">
                        <img src="{{ asset('img/products/6.jpg') }}">
                        <div class="card-body">
                            <h5>Semillas de Girasol</h5>
                            <span>$18</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div> <br>

@include('users.footer')

@endsection