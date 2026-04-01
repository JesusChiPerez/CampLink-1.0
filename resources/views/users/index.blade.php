@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/users/listusers.css') }}">
@endpush

@section('content')

<div class="container users-container">

    <h1 class="users-title">Lista de Usuarios</h1>

    @empty($users)

        <div class="alert alert-warning users-empty">
            Tu lista de usuarios está vacía
        </div>

    @else

        <div class="table-responsive users-table">
            <table class="table table-striped mb-0">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Correo Electrónico</th>
                        <th>Permisos</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($users as $user)
                        <tr>

                            <td>{{ $user->id }}</td>

                            <td>{{ $user->name }}</td>

                            <td>{{ $user->email }}</td>

                            <td>
                                @if ($user->isAdmin())
                                    <span class="badge-admin">
                                        Admin desde {{ optional($user->admin_since)->diffForHumans() }}
                                    </span>
                                @else
                                    <span class="badge-user">
                                        Usuario
                                    </span>
                                @endif
                            </td>

                            <td>
                                <form method="POST" class="d-inline"
                                    action="{{ route('users.admin.toggle', ['user' => $user->id]) }}">
                                    @csrf

                                    <button type="submit"
                                        class="btn btn-link btn-toggle 
                                        {{ $user->isAdmin() ? 'btn-remove-admin' : 'btn-make-admin' }}">

                                        {{ $user->isAdmin() ? 'Quitar Admin' : 'Hacer Admin' }}

                                    </button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

    @endempty

</div>

@include('users.footer')

@endsection