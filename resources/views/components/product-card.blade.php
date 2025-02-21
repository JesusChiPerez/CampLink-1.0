<div class="card mt-3">
    <img class="card-img-top" src="{{ asset($product->images->first()->path) }}" height="500px">
    <div class="card-body">
        <h4 class="text-right"><strong>$ {{ $product->price }}</strong></h4>
        <h5 class="card-title">{{ $product->title }}</h5>
        <p class="card-text">{{ $product->description }}</p>
        <p class="card-text">{{ $product->stock }} left</p>
        <h4></h4>
    </div>
</div>
