@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/users/listproduct.css') }}">
@endpush

@section('content')

<div class="container products-container">

    <h1 class="products-title">Lista de Productos</h1>

    <div class="text-end mb-3">
        <a class="btn btn-add-product" href="{{ route('products.create') }}">
            + Agregar Nuevo Producto
        </a>
    </div>

    @empty($products)
        <div class="alert alert-warning empty-alert">
            La lista de productos está vacía
        </div>
    @else
        <div class="table-responsive products-table">
            <table class="table table-striped mb-0">
                <thead>
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
                            <td>{{ Str::limit($product->description, 50) }}</td>
                            <td><strong>${{ $product->price }}</strong></td>
                            <td>{{ $product->stock }}</td>
                            <td>
                                <span class="badge bg-success">
                                    {{ $product->status }}
                                </span>
                            </td>
                            <td>

                                <a class="btn btn-link action-btn btn-view"
                                   href="{{ route('products.show', ['product' => $product->id]) }}">
                                    Ver
                                </a>

                                <a class="btn btn-link action-btn btn-edit"
                                   href="{{ route('products.edit', ['product' => $product->id]) }}">
                                    Editar
                                </a>

                                <form method="POST" class="d-inline"
                                    action="{{ route('products.destroy', ['product' => $product->id]) }}">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-link action-btn btn-delete">
                                        Eliminar
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