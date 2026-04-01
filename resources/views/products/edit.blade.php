@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/users/editproduct.css') }}">
@endpush

@section('content')

<div class="container edit-container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card edit-card">

                <div class="edit-header">
                    Modificar Producto
                </div>

                <div class="edit-body">

                    <form method="POST"
                        action="{{ route('products.update', ['product' => $product->id]) }}"
                        enctype="multipart/form-data">

                        @csrf
                        @method('PUT')

                        <div class="form-row">
                            <label>Nombre</label>
                            <input class="form-control" type="text" name="title"
                                value="{{ old('title') ?? $product->title }}" required>
                        </div>

                        <div class="form-row">
                            <label>Descripción</label>
                            <input class="form-control" type="text" name="description"
                                value="{{ old('description') ?? $product->description }}" required>
                        </div>

                        <div class="form-row">
                            <label>Precio</label>
                            <input class="form-control" type="number" name="price"
                                min="1.00" step="0.01"
                                value="{{ old('price') ?? $product->price }}" required>
                        </div>

                        <div class="form-row">
                            <label>Stock</label>
                            <input class="form-control" type="number" name="stock"
                                min="0"
                                value="{{ old('stock') ?? $product->stock }}" required>
                        </div>

                        <div class="form-row">
                            <label>Estado</label>
                            <select class="custom-select" name="status" required>
                                <option
                                    {{ (old('status') == 'available' ? 'selected' : $product->status == 'available') ? 'selected' : '' }}
                                    value="available">Disponible</option>

                                <option
                                    {{ (old('status') == 'unavailable' ? 'selected' : $product->status == 'unavailable') ? 'selected' : '' }}
                                    value="unavailable">No Disponible</option>
                            </select>
                        </div>

                        <div class="form-row">
                            <label>Imágenes</label>
                            <div class="custom-file">
                                <input type="file" accept="image/*" name="images[]"
                                    class="custom-file-input" multiple>
                                <label class="custom-file-label">
                                    Imágenes del producto...
                                </label>
                            </div>
                        </div>

                        <div class="form-row mt-3">
                            <button type="submit" class="btn btn-edit-save">
                                Guardar cambios
                            </button>
                        </div>

                    </form>

                </div>

            </div>

        </div>
    </div>
</div>

@include('users.footer')

@endsection