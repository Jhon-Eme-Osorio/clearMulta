<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClearMulta</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    @vite(['resources/css/styles.css'])


</head>

<body>
    <nav class="navbar  navbar-expand-lg  bg-dark border-bottom border-body" data-bs-theme="dark" id="navbar-example2">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('imagenes/logo.svg') }}" alt="logo"
                    width="90px" height="60px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-tabs ms-auto mb-2 mb-lg-0">
                    <li class="nav-item text-center">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Inicio</a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link " href="{{ route('registro') }}">Registro</a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link " href="{{ route('multa') }}">Multa</a>
                    </li>
                    <li class="nav-item dropdown dropstart text-center">
                        @if (Route::currentRouteName() == 'contacto')
                            <a class="nav-link dropdown-toggle" href="{{ route('contacto') }}" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Ayuda
                            </a>
                        @elseif (Route::currentRouteName() == '#')
                            <a class="nav-link dropdown-toggle" href="{{ route('#') }}" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Ayuda
                            </a>
                        @else
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Ayuda
                            </a>
                        @endif
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-center" href="{{ route('contacto') }}">Contacto</a>
                            </li>
                            <li><a class="dropdown-item text-center" href="{{ route('multa') }}">Preguntas
                                    frecuentes</a></li>
                        </ul>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link " href="#">Nosotros</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="content" data-bs-spy="scroll" data-bs-smooth-scroll="true">

        <div id="section1">
            @yield('contenido')
        </div>



    </main>


    {{-- <footer class="footer text-center bg-dark text-white">
        <div class="container">
            <div class="row">
                <p>© 2024 BARBERSHOP. Reservados todos los derechos</p>
            </div>
        </div>
    </footer> --}}

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-body-tertiary text-muted">
        <!-- Section: Social media -->
        {{-- <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->
  
      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section> --}}
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->

                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>ClearMulta
                        </h6>
                        <p>
                            <a href="#!" class="text-reset text-decoration-none">politica de privacidad</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset text-decoration-none">termino y condiciones</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4 bg-dark text-white">
            © 2024 Copyright
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <script>
        // Esperar a que el DOM esté completamente cargado
        document.addEventListener('DOMContentLoaded', (event) => {
            // Obtener la URL actual
            let currentUrl = window.location.href;

            // Obtener todos los enlaces de navegación
            let navLinks = document.querySelectorAll('.navbar-nav .nav-link');

            navLinks.forEach(link => {
                // Verificar si el enlace coincide con la URL actual
                if (link.href === currentUrl) {
                    // Añadir la clase 'active' al enlace correspondiente
                    link.classList.add('active');
                } else {
                    // Asegurarse de que los otros enlaces no tengan la clase 'active'
                    link.classList.remove('active');
                }
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>
