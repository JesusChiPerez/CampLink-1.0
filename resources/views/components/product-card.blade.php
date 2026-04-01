
@push('styles')
<link rel="stylesheet" href="{{ asset('css/productos.css') }}">
@endpush
<div class="card mt-3">

    <div id="carousel{{ $product->id }}" class="carousel slide carousel-fade">
        <div class="carousel-inner">
            @foreach ($product->images as $image)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <img class="d-block w-100 card-img-top" src="{{ asset($image->path) }}" height="500">
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carousel{{ $product->id }}" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#carousel{{ $product->id }}" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <div class="card-body product-card-body">

        <h4 class="product-price"><strong>${{ $product->price }}</strong></h4>

        <h5 class="card-title">{{ $product->title }}</h5>

        <p class="card-text">{{ $product->description }}</p>

        <p class="card-text"><strong>{{ $product->stock }} disponibles</strong></p>

        @if (isset($cart))
            <p class="card-text">
                {{ $product->pivot->quantity }} en tu carrito
                <strong>(${{ $product->total }})</strong>
            </p>

            <form method="POST"
                action="{{ route('products.carts.destroy', ['cart' => $cart->id, 'product' => $product->id]) }}">
                @csrf
                @method('DELETE')

                <button type="submit" class="product-btn">
                    Quitar del carrito
                </button>
            </form>

        @else

            @guest
                <p class="card-text text-muted">Inicia sesión para agregar al carrito</p>

                <a href="{{ route('login') }}" class="product-btn">
                    Iniciar Sesión
                </a>

            @else
                <form method="POST"
                    action="{{ route('products.carts.store', ['product' => $product->id]) }}">
                    @csrf

                    <button type="submit" class="product-btn">
                        Agregar al Carrito
                    </button>
                </form>
            @endguest

        @endif

    </div>
</div>