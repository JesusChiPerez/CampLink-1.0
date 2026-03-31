@extends('layouts.app')

@section('content')
    <h1>Lista de Usuarios</h1>

    @empty($users)
        <div class="alert alert-warning">
            Tu lista de usuarios está vacía
        </div>
    @else
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-light">
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Correo Electrónico</th>
                        <th>Permisos desde</th>
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
                                {{ optional($user->admin_since)->diffForHumans() ?? 'Nunca' }}
                            </td>
                            <td>
                                <form method="POST" class="d-inline"
                                    action="{{ route('users.admin.toggle', ['user' => $user->id]) }}">
                                    @csrf
                                    <button type="submit" class="btn btn-link">
                                        {{ $user->isAdmin() ? 'Quitar' : 'Hacer' }}
                                        Admin
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div> <br>
        @include('users.footer')
    @endempty
@endsection
