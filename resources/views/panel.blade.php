@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Panel de Administrador</div>

                    <div class="card-body">
                        <div class="list-group">
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
    </div>
@endsection
