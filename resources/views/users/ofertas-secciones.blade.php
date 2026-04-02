<div class="offers-container py-5">
    <div class="container text-center text-white mb-4">
        <h1 class="display-3 fw-bold">Ofertas!</h1>
        <p class="h5">conoce nuestros nuevos productos</p>
    </div>

    <div class="container">
        <div class="row g-4 justify-content-center">
            <div class="col-md-4">
                <div class="offer-card">
                    <div class="badge-new">PRODUCTO NUEVO</div>
                    <img src="{{ asset('img/bienvenida/pepino.jpg') }}" alt="Pepino">
                    <div class="offer-card-body">
                        <h3>Pepino</h3>
                        <p>Pepino fresco de alta calidad, cultivado bajo prácticas agrícolas responsables. Ideal para
                            ensaladas, jugos y platillos saludables, destacando por su textura crujiente.</p>
                        <a href="{{ route('tienda') }}" class="btn btn-dark-custom">Comprar ahora</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="offer-card">
                    <img src="{{ asset('img/bienvenida/sandia.jpg') }}" alt="Sandia">
                    <div class="offer-card-body">
                        <h3>Sandia</h3>
                        <p>Sandía dulce y jugosa, cosechada directamente del campo para garantizar frescura y sabor
                            natural. Perfecta para refrescarte en días calurosos y disfrutar en familia.</p>
                        <a href="{{ route('tienda') }}" class="btn btn-dark-custom">Comprar ahora</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="offer-card">
                    <div class="badge-new">PRODUCTO NUEVO</div>
                    <img src="{{ asset('img/bienvenida/habanero.jpg') }}" alt="Chile Habanero">
                    <div class="offer-card-body">
                        <h3>Chile Habanero</h3>
                        <p>Chile habanero de intenso sabor y alto nivel de picor, característico de la región. Ideal
                            para salsas, aderezos y platillos tradicionales que buscan un toque auténtico y picante.
                        </p>
                        <a href="{{ route('tienda') }}" class="btn btn-dark-custom">Comprar ahora</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>