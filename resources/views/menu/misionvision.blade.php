@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Misión y Visión de la Empresa</div>

                    <div class="card-body">


                        {{-- Contenido de texto --}}
                        <h4>Misión</h4>
                        <p>
                            Campliink es una plataforma digital orientada a conectar de manera directa a los productores
                            agrícolas con los consumidores finales, eliminando intermediarios en la cadena de
                            comercialización. Nuestra misión es garantizar condiciones de precio justas, fortalecer la
                            economía local y promover un modelo de comercio basado en la transparencia, la equidad y la
                            colaboración solidaria entre los distintos actores del mercado. </p>

                        <h4>Visión</h4>
                        <p>
                            Consolidarnos como una red confiable, innovadora y ampliamente reconocida a nivel nacional, que
                            impulse el desarrollo sostenible de los productores agrícolas y transforme significativamente
                            los esquemas tradicionales de comercialización del sector. Buscamos generar un impacto positivo
                            en las comunidades, promoviendo su bienestar económico y social a través de un ecosistema
                            comercial más justo, eficiente y accesible. </p>




                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    @include('users.footer')
@endsection