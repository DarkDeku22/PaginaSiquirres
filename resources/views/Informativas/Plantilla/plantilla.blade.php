<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UCR Siquirres</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


    @include('/informativas/Partes/css')

</head>

<body>

  <!-- ======= Encabezado ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href={{route('inicio')}} class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logoUCR.png" alt="" style="margin-left: -30px !important; max-height: 70px;"> 
        <img id="ucrSiquirres" src="assets/img/logoUCRSiquirres.png" alt="">      
        
        {{-- @yield('identificadores')   --}}

       <!-- <h1>UpConstruction<span>.</span></h1> LOGO  -->
      </a>

      
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <!-- INICIO DEL NAVBAR  -->

      @yield('nav')    
     
    </div>
  </header><!-- End Header -->

  <body>
    
     @yield('medio')
    
  </body>


    <!-- ======= Footer ======= -->

    <footer id="footer" class="footer">

        <!-- INICIO DE LAS COLUMNAS DE INFORMACION -->
    
        <div class="footer-content position-relative">
          <div class="container">
            <div class="row">
    
              <div id="infoFooter" class="col-lg-5 col-md-6">
                <div class="footer-info">
                  <img class="imgfo" src="assets/img/logoUCRblanco.png" alt=""> 
                  <br>
                  <p style="width: 400px;">
                    La Universidad de Costa Rica es una institución de educación superior reconocida en toda América Latina y 
                    abanderada de la enseñanza humanista, donde se han formado generaciones de profesionales con compromiso social.
                  </p>
                </div>
              </div><!-- FINAL DE LAS COLUMNAS DE INFORMACION -->
    
              <div class="col-lg-4 col-md-6 footer-links" style="">
                <h4>Más Información</h4>
                <ul>
                  <li><a href="https://www.ucr.ac.cr/acerca-u/sedes-recintos.html">Sedes y Recintos</a></li>
                  <li><a href="https://www.ucr.ac.cr/acerca-u/historia-simbolos.html">Historia de la Universidad</a></li>
                  <li><a href="https://www.ucr.ac.cr/acerca-u/marco-estrategico.html">Marco Estratégico</a></li>
                  <li><a href="https://www.ucr.ac.cr/acerca-u/ucr-en-cifras.html">UCR en Cifras</a></li>
                  <li><a href="https://www.ucr.ac.cr/noticias/2013/02/01/siquirres-con-nuevo-espacio-academico.html">Acerca del Recinto</a></li>
                </ul>
              </div><!-- End footer links column-->

    
              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Visitanos</h4>
                <ul>
                  <li><a href="#">Estamos ubicados en el
                    antiguo edificio de la
                    municipalidad de Siquirres,
                    al costado oeste del mercado.
                    Tambien nos puede visitar en nuestra página de Facebook o en la sección de contactos.</a></li>
                </ul>
                <div class="social-links d-flex mt-3">
                  <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
                  <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                  <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                  <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
                </div>
              </div><!-- End footer links column-->
    
              </div>
          </div>
        </div>
    
        <div class="footer-legal text-center position-relative">
          <div class="container">
            <div class="copyright">
              @php
                  $año = date("Y");
              @endphp
              © 2012 - {{$año}}  Todos los derechos reservados <strong><span>Universidad de Costa Rica</span></strong>. Aula extendida de Siquirres.
            </div>
            <div class="credits">
              <!-- All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you purchased the pro version. -->
              <!-- Licensing information: https://bootstrapmade.com/license/ -->
              <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/ -->
              Diseñado por los estudiantes <p>Natacha Ramirez y Alvaro Martines</p>
            </div>
          </div>
        </div>
    
      </footer>
    
      <!-- FINAL DEL FOOTER -->
    
      <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    
      <div id="preloader"></div>
    
      @include('/informativas/Partes/js')

    </body>
    
    </html>