@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/menu/productores.css') }}">
@endpush

@section('content')

<div class="container productores-container">

    <h2 class="text-center mb-4 titulo-productores">Nuestros Productores</h2>

    <div class="row">

        {{-- PRODUCTOR 1 --}}
        <div class="col-md-4 mb-4">
            <div class="card productor-card">

                <div class="productor-img">
                    <img src="{{ asset('img/productores/P1.webp') }}" alt="Productor">
                </div>

                <div class="card-body">

                    <h5 class="productor-nombre">Juan Pérez López</h5>

                    <div class="productor-info">
                        <p><strong>CURP:</strong> JPLX900101HDFXXX01</p>
                        <p><strong>RFC:</strong> JPL900101XXX</p>
                        <p><strong>Correo:</strong> juan@mail.com</p>
                        <p><strong>Tel:</strong> 9811234567</p>
                    </div>

                    <div class="productor-direccion">
                        <p><strong>Estado:</strong> Campeche</p>
                        <p><strong>Municipio:</strong> Campeche</p>
                        <p><strong>CP:</strong> 24000</p>
                        <p><strong>Colonia:</strong> Centro</p>
                        <p><strong>Calle:</strong> 10</p>
                        <p><strong>No. Ext:</strong> 123</p>
                        <p><strong>No. Int:</strong> 2</p>
                    </div>

                    <div class="productor-desc">
                        <p>Productor agrícola especializado en frutas tropicales y cultivo sustentable.</p>
                    </div>

                </div>
            </div>
        </div>

        {{-- DUPLICA ESTE BLOQUE PARA MÁS PRODUCTORES --}}
        {{-- PRODUCTOR 2 --}}
        <div class="col-md-4 mb-4">
            <div class="card productor-card">
                <div class="productor-img">
                    <img src="{{ asset('img/productores/P2.jpg') }}">
                </div>
                <div class="card-body">
                    <h5 class="productor-nombre">María Gómez Ruiz</h5>

                    <div class="productor-info">
                        <p><strong>CURP:</strong> JPLX900101HDFXXX01</p>
                        <p><strong>RFC:</strong> JPL900101XXX</p>
                        <p><strong>Correo:</strong> maria@mail.com</p>
                        <p><strong>Tel:</strong> 9811234567</p>
                    </div>

                    <div class="productor-direccion">
                        <p><strong>Estado:</strong> Campeche</p>
                        <p><strong>Municipio:</strong> Campeche</p>
                        <p><strong>CP:</strong> 24000</p>
                        <p><strong>Colonia:</strong> Centro</p>
                        <p><strong>Calle:</strong> 10</p>
                        <p><strong>No. Ext:</strong> 123</p>
                        <p><strong>No. Int:</strong> 2</p>
                    </div>
                    <div class="productor-desc">
                        <p>Productora de hortalizas orgánicas con enfoque ecológico.</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- PRODUCTOR 3 --}}
        <div class="col-md-4 mb-4">
            <div class="card productor-card">
                <div class="productor-img">
                    <img src="{{ asset('img/productores/P3.jpg') }}">
                </div>
                <div class="card-body">
                    <h5 class="productor-nombre">Carlos Hernández</h5>

                    <div class="productor-info">
                        <p><strong>CURP:</strong> JPLX900101HDFXXX01</p>
                        <p><strong>RFC:</strong> JPL900101XXX</p>
                        <p><strong>Correo:</strong> carlos@mail.com</p>
                        <p><strong>Tel:</strong> 9811234567</p>
                    </div>

                    <div class="productor-direccion">
                        <p><strong>Estado:</strong> Campeche</p>
                        <p><strong>Municipio:</strong> Campeche</p>
                        <p><strong>CP:</strong> 24000</p>
                        <p><strong>Colonia:</strong> Centro</p>
                        <p><strong>Calle:</strong> 10</p>
                        <p><strong>No. Ext:</strong> 123</p>
                        <p><strong>No. Int:</strong> 2</p>
                    </div>
                    <div class="productor-desc">
                        <p>Especialista en producción de semillas certificadas.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@include('users.footer')

@endsection