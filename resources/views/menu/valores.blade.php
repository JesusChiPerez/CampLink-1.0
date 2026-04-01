@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/menu/valores.css') }}">
@endpush

@section('content')

<div class="container valores-container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <div class="card valores-card">

                <div class="valores-header">
                    Valores Institucionales
                </div>

                <div class="valores-body">

                    <!-- Intro -->
                    <p class="valores-intro">
                        En Campliink, los valores representan la base ética y operativa que guía cada una de nuestras
                        acciones, decisiones y relaciones dentro de la plataforma. Estos principios no solo definen
                        nuestra identidad como organización, sino que también orientan la manera en que interactuamos
                        con productores, clientes y aliados estratégicos.
                    </p>

                    <!-- Grid de valores -->
                    <div class="valores-grid">

                        <div class="valor-item">
                            <div class="valor-icon"><i class="bi bi-eye"></i></div>
                            <h5>Transparencia</h5>
                            <p>Promovemos un entorno de confianza mediante la claridad en la información y procesos.</p>
                        </div>

                        <div class="valor-item">
                            <div class="valor-icon"><i class="bi bi-check-circle"></i></div>
                            <h5>Responsabilidad</h5>
                            <p>Actuamos con compromiso asegurando el cumplimiento de acuerdos y buen funcionamiento.</p>
                        </div>

                        <div class="valor-item">
                            <div class="valor-icon"><i class="bi bi-shield-check"></i></div>
                            <h5>Honestidad</h5>
                            <p>Nos conducimos con integridad y ética en todas nuestras actividades.</p>
                        </div>

                        <div class="valor-item">
                            <div class="valor-icon"><i class="bi bi-people"></i></div>
                            <h5>Humildad</h5>
                            <p>Fomentamos el respeto, aprendizaje continuo y apertura a nuevas ideas.</p>
                        </div>

                        <div class="valor-item">
                            <div class="valor-icon"><i class="bi bi-clock"></i></div>
                            <h5>Puntualidad</h5>
                            <p>Valoramos el tiempo y promovemos eficiencia en procesos y entregas.</p>
                        </div>

                        <div class="valor-item">
                            <div class="valor-icon"><i class="bi bi-heart"></i></div>
                            <h5>Compromiso</h5>
                            <p>Trabajamos por el bienestar de productores y satisfacción de clientes.</p>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
</div>

<br>
@include('users.footer')

@endsection