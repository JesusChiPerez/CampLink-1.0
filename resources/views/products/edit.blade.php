@extends('layouts.app')

@section('content')
    <h1>Modificar Producto</h1>
    <form method="POST" action="{{ route('products.update', ['product' => $product->id]) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-row">
            <label>Nombre</label>
            <input class="form-control" type="text" name="title" value="{{ old('title') ?? $product->title }}" required>
        </div>
        <div class="form-row">
            <label>Descripción</label>
            <input class="form-control" type="text" name="description"
                value="{{ old('description') ?? $product->description }}" required>
        </div>
        <div class="form-row">
            <label>Precio</label>
            <input class="form-control" type="number" name="price" min="1.00" step="0.01"
                value="{{ old('price') ?? $product->price }}" required>
        </div>
        <div class="form-row">
            <label>Stock</label>
            <input class="form-control" type="numer" name="stock" min="0"
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
            <label>
                {{ __('Images') }}
            </label>
            <div class="custom-file">
                <input type="file" accept="image/*" name="images[]" class="custom-file-input" multiple>
                <label class="custom-file-label">
                    Imágenes del producto...
                </label>
            </div>
        </div>
        <div class="form-row mt-3">
            <button type="submit" class="btn btn-primary btn-lg">Guardar cambios</button>
        </div>
    </form><br>
    @include('users.footer')
@endsection
