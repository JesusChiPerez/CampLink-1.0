@extends('layouts.app')

@section('content')
    <h1>Lista de Productos</h1>

    <a class="btn btn-success mb-3" href="{{ route('products.create') }}">Agregar Nuevo Producto</a>

    @empty($products)
        <div class="alert alert-warning">
            La lista de productos está vacía
        </div>
    @else
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->stock }}</td>
                            <td>{{ $product->status }}</td>
                            <td>
                                <a class="btn btn-link" href="{{ route('products.show', ['product' => $product->id]) }}">Ver</a>

                                {{-- <a class="btn btn-link" href="{{ route('products.show', ['product' => $product->title]) }}">Show</a> --}}

                                <a class="btn btn-link" href="{{ route('products.edit', ['product' => $product->id]) }}">Editar</a>
                                <form method="POST" class="d-inline"
                                    action="{{ route('products.destroy', ['product' => $product->id]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-link">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div><br>
        @endif
        @include('users.footer')
    @endsection
    
