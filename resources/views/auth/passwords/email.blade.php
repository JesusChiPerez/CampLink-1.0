@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/password/email.css') }}">
@endpush

@section('content')

<div class="container email-container">
    <div class="row justify-content-center">
        <div class="col-md-7">

            <div class="card email-card">

                <div class="email-header">
                    {{ __('Restablecer Contraseña') }}
                </div>

                <div class="email-body">

                    @if (session('status'))
                        <div class="alert email-alert" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">
                                {{ __('Dirección de Correo Electrónico') }}
                            </label>

                            <div class="col-md-6">
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}"
                                    required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">

                                <button type="submit" class="btn email-btn">
                                    {{ __('Enviar Enlace para Restablecer Contraseña') }}
                                </button>

                            </div>
                        </div>

                    </form>

                </div>

            </div>

        </div>
    </div>
</div>

<br>
@include('users.footer')

@endsection