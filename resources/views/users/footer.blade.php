<footer class="footer-camplink py-5 text-white">
    <div class="container">
        <div class="row align-items-center mb-4">
            <div class="col-md-6">
                <p class="h5 fw-normal">No esperes mas y regístrate con nosotros para ganar lo que realmente vale tus productos.</p>
            </div>
            <div class="col-md-6 text-end">
                <form action="#" method="POST" class="d-inline-flex align-items-center">
                    @csrf
                    <span class="me-3">Inserta tu e-mail aqui</span>
                    <button type="submit" class="btn btn-dark-footer rounded-pill px-4 py-2">Suscribete ahora</button>
                </form>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-4">
                <div class="bg-white p-2 d-inline-block rounded mb-3">
                    <img src="{{ asset('img/logo_camplink.png') }}" alt="CAMPLINK" width="150">
                </div>
                <div class="social-icons">
                    <a href="#" class="text-white me-3"><i class="bi bi-facebook fs-4"></i></a>
                    <a href="#" class="text-white"><i class="bi bi-instagram fs-4"></i></a>
                </div>
            </div>

            <div class="col-md-3">
                <h5 class="fw-bold border-bottom pb-2 mb-3">Help</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white text-decoration-none">FAQ</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Customer service</a></li>
                    <li><a href="#" class="text-white text-decoration-none">How to guides</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Contact us</a></li>
                </ul>
            </div>

            <div class="col-md-3">
                <h5 class="fw-bold border-bottom pb-2 mb-3">Other</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white text-decoration-none">Privacy Policy</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Sitemapp</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Subscriptions</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>