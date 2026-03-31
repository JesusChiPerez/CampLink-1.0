<footer class="footer-camplink text-white pt-5">
    <div class="container">

        <!--  SECCIÓN SUSCRIPCIÓN -->
        <div class="row align-items-center mb-5 pb-4 border-bottom">
            <div class="col-md-6 mb-3 mb-md-0">
                <h4 class="fw-bold">Mantente informado </h4>
                <p class="mb-0">
                    Recibe ofertas, tips agrícolas y oportunidades para vender tus productos directamente.
                </p> 
            </div>

            <div class="col-md-6">
                <!-- SOLO DISEÑO (SIN FUNCIONALIDAD) -->
                <div class="d-flex flex-column flex-sm-row gap-2">
                    <input 
                        type="email" 
                        class="form-control rounded-pill px-3"
                        placeholder="Ingresa tu correo"
                        disabled
                    >
                    <button type="button" class="btn btn-dark-footer rounded-pill px-4" disabled>
                        Suscribirme
                    </button>
                </div>
            </div>
        </div>

        <!--  CONTENIDO PRINCIPAL -->
        <div class="row">

            <!-- LOGO + REDES -->
            <div class="col-md-4 mb-4">
                <img src="{{ asset('img/logo_camplink.png') }}" alt="Camplink" width="160" class="mb-3">

                <p>
                    Plataforma digital para la compra y venta de productos agrícolas,
                    conectando productores con compradores de manera directa y segura.
                </p>

                <div class="social-icons">
                    <a href="#" class="text-white me-3"><i class="bi bi-facebook fs-5"></i></a>
                    <a href="#" class="text-white me-3"><i class="bi bi-instagram fs-5"></i></a>
                    <a href="#" class="text-white"><i class="bi bi-whatsapp fs-5"></i></a>
                </div>
            </div>

            <!-- EMPRESA -->
            <div class="col-md-2 mb-4">
                <h5 class="fw-bold">Empresa</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="footer-link">Inicio</a></li>
                    <li><a href="#" class="footer-link">Nosotros</a></li>
                    <li><a href="#" class="footer-link">Cómo funciona</a></li>
                    <li><a href="#" class="footer-link">Contacto</a></li>
                </ul>
            </div>

            <!-- SERVICIOS -->
            <div class="col-md-3 mb-4">
                <h5 class="fw-bold">Servicios</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="footer-link">Compra de productos</a></li>
                    <li><a href="#" class="footer-link">Venta directa</a></li>
                    <li><a href="#" class="footer-link">Publicar cosechas</a></li>
                    <li><a href="#" class="footer-link">Asesoría agrícola</a></li>
                </ul>
            </div>

            <!-- SOPORTE -->
            <div class="col-md-3 mb-4">
                <h5 class="fw-bold">Soporte</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="footer-link">Preguntas frecuentes</a></li>
                    <li><a href="#" class="footer-link">Política de privacidad</a></li>
                    <li><a href="#" class="footer-link">Términos y condiciones</a></li>
                </ul>
            </div>
        </div>

        <!--  COPYRIGHT -->
        <div class="text-center pt-4 border-top mt-4">
            <p class="mb-0">
                © {{ date('Y') }} Camplink. Todos los derechos reservados.
            </p>
        </div>

    </div>
</footer>