@extends('layouts.app')

@section('content')<br><br><br><br><br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Panel de Administrador</div>

                    <div class="card-body">
                        <div class="list-group">
                            {{--  CORREGIDO: Usa 'products.index' que en el contexto del panel es /panel/products --}}
                            <a class="list-group-item" href="{{ route('products.index') }}">
                                Gestionar productos
                            </a>
                            <a class="list-group-item" href="{{ route('users.index') }}">
                                Gestionar usuarios
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <br> <br><br><br><br><br><br><br>
    @include('users.footer')
@endsection