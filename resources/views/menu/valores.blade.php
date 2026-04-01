@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Valores Institucionales</div>

                    <div class="card-body">

                        <p>
                            En Campliink, los valores representan la base ética y operativa que guía cada una de nuestras
                            acciones, decisiones y relaciones dentro de la plataforma. Estos principios no solo definen
                            nuestra identidad como organización, sino que también orientan la manera en que interactuamos
                            con productores, clientes y aliados estratégicos.
                        </p>

                        <ul>
                            <li>
                                <strong>Transparencia:</strong>
                                Promovemos un entorno de confianza mediante la claridad en la información, los procesos y
                                las transacciones realizadas dentro de la plataforma. Garantizamos que tanto productores
                                como consumidores tengan acceso a datos verídicos, fomentando relaciones comerciales
                                abiertas y seguras.
                            </li>

                            <li>
                                <strong>Responsabilidad:</strong>
                                Actuamos con un alto sentido de compromiso frente a nuestras obligaciones, asegurando el
                                cumplimiento de los acuerdos establecidos y el correcto funcionamiento de la plataforma.
                                Asumimos las consecuencias de nuestras acciones y buscamos siempre generar un impacto
                                positivo en la comunidad.
                            </li>

                            <li>
                                <strong>Honestidad:</strong>
                                Nos conducimos con integridad en todas nuestras actividades, manteniendo una conducta ética
                                que respalde la confianza depositada por nuestros usuarios. La veracidad y rectitud son
                                pilares fundamentales en cada interacción dentro de Campliink.
                            </li>

                            <li>
                                <strong>Humildad:</strong>
                                Reconocemos la importancia de aprender continuamente y valorar las aportaciones de cada
                                miembro de la comunidad. Fomentamos un ambiente de respeto, apertura y mejora constante,
                                donde todas las voces son escuchadas.
                            </li>

                            <li>
                                <strong>Puntualidad:</strong>
                                Valoramos el tiempo como un recurso clave, por lo que promovemos la eficiencia en los
                                procesos, el cumplimiento de plazos y la entrega oportuna de productos y servicios,
                                fortaleciendo así la confianza entre las partes involucradas.
                            </li>

                            <li>
                                <strong>Compromiso:</strong>
                                Estamos firmemente dedicados al desarrollo y bienestar de los productores agrícolas, así
                                como a la satisfacción de los clientes. Trabajamos de manera constante para mejorar la
                                plataforma y contribuir al crecimiento económico y social de las comunidades.
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    @include('users.footer')
@endsection