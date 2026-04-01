@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/users/show.css') }}">
@endpush

@section('content')

<div class="container show-container">

    <div class="row justify-content-center">
        <div class="col-md-6 show-card-wrapper">
            
            @include('components.product-card')

        </div>
    </div>

</div>

@include('users.footer')

@endsection