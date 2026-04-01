@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/users/panel.css') }}">
@endpush

@section('content')

<div class="container panel-container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card panel-card">

                <div class="panel-header">
                    Panel de Administrador
                </div>

                <div class="panel-body">
                    <div class="list-group panel-list">

                        <a class="list-group-item d-flex align-items-center justify-content-center gap-2"
                           href="{{ route('products.index') }}">
                            <i class="bi bi-box-seam"></i>
                            Gestionar productos
                        </a>

                        <a class="list-group-item d-flex align-items-center justify-content-center gap-2"
                           href="{{ route('users.index') }}">
                            <i class="bi bi-people"></i>
                            Gestionar usuarios
                        </a>

                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

@include('users.footer')

@endsection