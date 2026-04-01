@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/users/createproduct.css') }}">
@endpush

@section('content')

<div class="container create-container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card create-card">

                <div class="create-header">
                    Agregar Producto
                </div>

                <div class="create-body">

                    <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-row">
                            <label>Producto</label>
                            <input class="form-control" type="text" name="title"
                                value="{{ old('title') }}" required>
                        </div>

                        <div class="form-row">
                            <label>Descripción</label>
                            <input class="form-control" type="text" name="description"
                                value="{{ old('description') }}" required>
                        </div>

                        <div class="form-row">
                            <label>Precio</label>
                            <input class="form-control" type="number" name="price"
                                min="1.00" step="0.01"
                                value="{{ old('price') }}" required>
                        </div>

                        <div class="form-row">
                            <label>Stock</label>
                            <input class="form-control" type="number" name="stock"
                                min="0" value="{{ old('stock') }}" required>
                        </div>

                        <div class="form-row">
                            <label>Estado</label>
                            <select class="custom-select" name="status" required>
                                <option value="" selected>Seleccionar...</option>
                                <option {{ old('status') == 'available' ? 'selected' : '' }} value="available">
                                    Disponible
                                </option>
                                <option {{ old('status') == 'unavailable' ? 'selected' : '' }} value="unavailable">
                                    No Disponible
                                </option>
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
                            <button type="submit" class="btn btn-create">
                                Agregar Producto
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