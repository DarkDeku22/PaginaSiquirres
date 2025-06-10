<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title', 'Default Title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('logos/logoUCR.png') }}" rel="icon">
    <link href="{{ asset('logos/logoUCR.png') }}" rel="apple-touch-icon">


    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/NiceAdmin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/NiceAdmin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/NiceAdmin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/NiceAdmin/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="/NiceAdmin/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="/NiceAdmin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/NiceAdmin/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/NiceAdmin/assets/css/style.css" rel="stylesheet">

    <!-- Summernote CSS -->

    <link rel="stylesheet" href="{{ asset('libs/summernote-lite.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/summernote-bs5.min.css') }}">


    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Aug 30 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="" class="logo d-flex align-items-center">
                <img src="/logos/logoUCR.png" alt="logoUCR">
                <span class="d-none d-lg-block" style="color: #114e8f">Recinto Siquirres</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">


            <ul class="d-flex align-items-center">

                <div id="loading-spinner" class="spinner-border mx-3" 
                role="status" style="display: none; color: #114e8f;">
                    <span class="visually-hidden">Loading...</span>
                </div>

                <li class="nav-item dropdown pe-3">

                    @php
                        $user = Auth::user();
                    @endphp

                    @if ($user)
                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                            data-bs-toggle="dropdown" style="color: #114e8f">
                            @if ($user->rol === 'Admin')
                                <img src="/logos/admin.png" alt="Profile" class="rounded-circle">
                            @else
                                <img src="/logos/usuario.png" alt="Profile" class="rounded-circle">
                            @endif
                            <span class="d-none d-md-block dropdown-toggle ps-2">{{ $user->name }}</span>
                        </a><!-- End Profile Iamge Icon -->

                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                            <li class="dropdown-header mb-2">
                                <h5>{{ $user->rol }}</h5>
                                <h6>{{ $user->name }}</h6>
                                <span>{{ $user->email }}</span>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('dashboard') }}">
                                    <i class="bi bi-person"></i>
                                    <span>Perfil</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item d-flex align-items-center"
                                        style="background: none; border: none; cursor: pointer;">
                                        <i class="bi bi-box-arrow-right"></i>
                                        <span>Salir...</span>
                                    </button>
                                </form>
                            </li>
                        </ul><!-- End Profile Dropdown Items -->
                    @endif
                </li><!-- End Profile Nav -->


            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('administradorSiquirres52.index')}}">
                    <i class="bi bi-grid-fill"></i>
                    <span>Inicio</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('nosotrosSiquirres52.index')}}">
                    <i class="bi bi-menu-button-wide-fill"></i>
                    <span>Nosotros</span>
                </a>
            </li><!-- End Components Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('actividadesSiquirres52.index')}}">
                    <i class="bi bi-file-text-fill"></i>
                    <span>Actividades</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="">
                    <i class="bi bi-bar-chart-fill"></i>
                    <span>Proyectos</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="">
                    <i class="bi bi-person-lines-fill"></i>
                    <span>Contactos</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="">
                    <i class="bi bi-file-earmark-image"></i>
                    <span>Anuarios</span>
                </a>
            </li>

            <li class="nav-heading">Personal</li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="">
                    <i class="bi bi-person-fill"></i>
                    <span>Perfil</span>
                </a>
            </li>

            @if ($user && $user->rol === 'Admin')
                <li class="nav-item">
                    <a class="nav-link collapsed" href="">
                        <i class="bi bi-people-fill"></i>
                        <span>Usuarios</span>
                    </a>
                </li>
            @endif

        </ul>

    </aside><!-- End Sidebar-->


    <div class="content-below-navba">

        @yield('index')


    </div>


    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            © {{ date('Y') }} <strong><span>Universidad de Costa Rica</span></strong>. @lang('Reservados todos los derechos.')
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            <!-- Diseñado en <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="/NiceAdmin/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="/NiceAdmin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/NiceAdmin/assets/vendor/chart.js/chart.umd.js"></script>
    <script src="/NiceAdmin/assets/vendor/echarts/echarts.min.js"></script>
    <script src="/NiceAdmin/assets/vendor/quill/quill.min.js"></script>
    <script src="/NiceAdmin/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="/NiceAdmin/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="/NiceAdmin/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    -->
    <script src="/NiceAdmin/assets/js/main.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="{{ asset('libs/summernote-lite.js') }}"></script>


    @include('Dashboard/Partes/js')
    @yield('js')


    <script>
        $(document).ready(function() {
            $(".input-imagen").change(function() {
                var inputId = $(this).attr('id');
                var previewId = inputId + "-preview";
                var iconId = inputId + "-icon";
                readURL(this, previewId, iconId);
            });
        });

        function readURL(input, previewId, iconId) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $("#" + previewId).attr('src', e.target.result);
                    $("#" + previewId).show();
                    $("#" + iconId).hide();
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                $("#" + previewId).hide();
                $("#" + iconId).show();
            }
        }
    </script>

    <script>
        $(document).ready(function() {
            $(".input-imagen-dinamico").change(function() {
                var $input = $(this);
                var $container = $input.closest('.imagen-container').find('.previews-container-dinamico');
                $container.empty(); // Limpiar contenedor de vistas previas antes de mostrar nuevas

                if (this.files && this.files.length > 0) {
                    for (var i = 0; i < this.files.length; i++) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            var $preview = $('<img>').attr('src', e.target.result).addClass(
                                'mt-2 mx-2 rounded imagen-preview animacion').css({
                                'width': '170px',
                                'height': '130px',
                                'object-fit': 'cover'
                            });
                            $container.append($preview);
                        };
                        reader.readAsDataURL(this.files[i]);
                    }
                    $input.closest('.imagen-container').find('.bi-images').hide();
                } else {
                    $input.closest('.imagen-container').find('.bi-images').show();
                }
            });
        });
    </script>


    @stack('scripts')

    <script>
        // formulario.js
        function mostrarCampoAdicional(selectElement) {
            var campoAdicional = selectElement.parentNode.nextElementSibling;

            if (selectElement.value === "Red Social") {
                campoAdicional.style.display = "";
                campoAdicional.querySelector("input").setAttribute("required", "required");
            } else {
                campoAdicional.style.display = "none";
                campoAdicional.querySelector("input").removeAttribute("required");
            }
        }

        document.addEventListener("DOMContentLoaded", function() {
            // Obtener todos los elementos select con la clase "campo-select-dinamico"
            var selectElements = document.querySelectorAll(".campo-select-dinamico");

            // Agregar un event listener a cada elemento select
            selectElements.forEach(function(selectElement) {
                selectElement.addEventListener("change", function() {
                    mostrarCampoAdicional(this);
                });

                // Mostrar u ocultar el campo adicional al cargar la página
                mostrarCampoAdicional(selectElement);
            });
        });
    </script>

    <script>
        // Seleccionar todos los elementos con la clase 'correo-input'
        var correoInputs = document.querySelectorAll('.correo-input');

        // Iterar sobre los elementos seleccionados y agregar event listener
        correoInputs.forEach(function(correoInput) {
            correoInput.addEventListener('input', function() {
                // Obtener el valor del campo de correo electrónico
                var correoValue = correoInput.value;
                // Verificar si el valor contiene el carácter '@'
                if (!correoValue.includes('@')) {
                    // Si no contiene '@', agregar clase de Bootstrap para indicar que es inválido
                    correoInput.classList.add('is-invalid');
                } else {
                    // Si contiene '@', quitar la clase de Bootstrap para indicar que es inválido
                    correoInput.classList.remove('is-invalid');
                }
            });
        });
    </script>

    <script>
        function toggleGaleria() {
            var select = document.getElementById("galeriaImagenes");
            var galeriaContenedor = document.getElementById("galeriaContenedor");
            var inputImagenes = document.querySelector('[name="imagenDos[]"]');

            if (select.value === "Si") {
                galeriaContenedor.classList.remove("hidden");
                inputImagenes.setAttribute("required", "required");
            } else {
                galeriaContenedor.classList.add("hidden");
                inputImagenes.removeAttribute("required");
            }
        }
    </script>

    <script>
        //ver contra
        $(document).ready(function() {
            $("#show_hide_password a").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bx-hide");
                    $('#show_hide_password i').removeClass("bx-show");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bx-hide");
                    $('#show_hide_password i').addClass("bx-show");
                }
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const togglePasswordButtons = document.querySelectorAll('.toggle-password');

            togglePasswordButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    const passwordElement = this.previousElementSibling;
                    passwordElement.style.display = passwordElement.style.display === 'none' ?
                        'inline' : 'none';
                    this.querySelector('i').classList.toggle('bi-eye-slash-fill');
                    this.setAttribute('title', passwordElement.style.display === 'none' ?
                        'Mostrar contraseña' : 'Ocultar contraseña');
                });
            });
        });
    </script>

    <script>
        //mostrar contra
        document.querySelectorAll('.input-group-text').forEach(button => {
            button.addEventListener('click', function() {
                let input = this.previousElementSibling;
                if (input.type === 'password') {
                    input.type = 'text';
                    this.innerHTML = "<i class='bx bx-hide'></i>";
                } else {
                    input.type = 'password';
                    this.innerHTML = "<i class='bx bx-show'></i>";
                }
            });
        });
    </script>

    <script>
        // Guardar la posición del scroll antes de que la página se descargue
        window.addEventListener('beforeunload', function() {
            localStorage.setItem('scrollPosition', window.scrollY);
        });

        // Restaurar la posición del scroll cuando la página se carga
        window.addEventListener('load', function() {
            const scrollPosition = localStorage.getItem('scrollPosition');
            if (scrollPosition !== null) {
                window.scrollTo(0, parseInt(scrollPosition, 10));
            }
        });
    </script>

    <script>
        // Mostrar el spinner al cargar la página
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById('loading-spinner').style.display = 'block';
        });

        // Ocultar el spinner cuando la página esté completamente cargada, con un retraso de 2 segundos (2000 ms)
        window.addEventListener("load", function() {
            setTimeout(function() {
                document.getElementById('loading-spinner').style.display = 'none';
            }, 1000); // Cambia 2000 por el número de milisegundos que deseas que el spinner permanezca visible
        });
    </script>

    <!-- modo oscuro -->
    <script>
        function toggleDarkMode(button) {
            var card = button.closest('.card');
            card.classList.toggle('dark-mode-card');
        }
    </script>

</body>

</html>
