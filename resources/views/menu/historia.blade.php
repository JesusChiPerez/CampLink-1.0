@extends('layouts.app')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/menu/historia.css') }}">
@endpush
@section('content')


<div class="container historia-container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card historia-card">
                
                <div class="historia-header">
                    Nuestra Historia
                </div>

                <div class="historia-body">

                    <p>
                        La plataforma “Campliink” fue concebida en el año 2026 como respuesta a una problemática
                        estructural identificada en diversas comunidades locales, particularmente en el sector agrícola.
                        Los productores enfrentan serias dificultades al momento de comercializar sus productos, debido
                        a la presencia predominante de intermediarios que intervienen en la cadena de distribución. Esta
                        dinámica limita de manera significativa la capacidad de los productores para establecer precios
                        justos, lo que repercute negativamente en sus ingresos y, en consecuencia, en su estabilidad
                        económica.
                    </p>

                    <p>
                        En atención a esta situación, surge la iniciativa de desarrollar una plataforma tecnológica
                        orientada a transformar el modelo tradicional de comercialización. “Campliink” propone la
                        eliminación de intermediarios, facilitando un canal directo de interacción entre productores y
                        consumidores finales. Este enfoque no solo busca optimizar la cadena de suministro, sino también
                        promover condiciones más equitativas de mercado, permitiendo a los productores fijar precios más
                        justos y competitivos.
                    </p>

                    <p>
                        Asimismo, la plataforma tiene como objetivo fortalecer la economía local mediante el
                        empoderamiento de los productores, brindándoles herramientas digitales que amplíen su alcance
                        comercial, mejoren su visibilidad en el mercado y fomenten relaciones comerciales más
                        transparentes y sostenibles. De esta manera, “Campliink” se posiciona como una solución
                        innovadora que contribuye al desarrollo económico regional y a la construcción de un ecosistema
                        de comercio más justo y eficiente.
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>

<br>
@include('users.footer')

@endsection