
@extends('/informativas/Plantilla/plantilla')

@section('nav')

<nav id="navbar" class="navbar">
  <ul>
    <li><a href={{route('inicio')}} class="active">Inicio</a></li>
    <li><a href={{ route('nosotros')}}><span>Nosotros</span></a>  <!-- MENU DESPLEGABLE, NIVEL 1 -->
    </li>
    <li><a href={{route('actividades')}}>Actividades</a></li>
    <li><a href={{route('proyectos')}}><span>Proyectos</span></a>  <!-- MENU DESPLEGABLE, NIVEL 1 -->
    </li>
    <li><a href={{route('anuario')}}>Anuarios</a></li>
    <li><a href={{route('contacto')}}>Contactanos</a></li>
  </ul>
</nav><!-- FINAL DEL NAVBAR -->
    
@endsection

{{-- @section('identificadores')

  <img src="assets/img/logoUCR.png" alt="" style="margin-left: -30px !important; max-height: 90px;"> 
  <img id="ucrSiquirres" src="assets/img/logoUCRSiquirres.png" alt=""> 
    
@endsection --}}


@section('medio')

  <!-- =======  SLIDER PRINCIPAL ======= -->
  <section id="hero" class="hero">

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
        <!-- AQUI DEDERIA IR UN FOREACH PARA PARA CREAR CADA UNO DE LOS CAMPOS DEL SLIDER -->
      @foreach ($slid as $item)
          <div class="carousel-item active" style="background-image: url({{$item->img}})">  <!-- IMAGEN DEL SLIDER -->

            <div class="info d-flex align-items-center"> <!-- TEXTO DEL SLIDER -->
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-lg-6 text-center">
                    <h2 data-aos="fade-down">{{$item->titulo}}</h2>
                    <p data-aos="fade-up">{!!$item->subtitulo!!}</p>
                    <a data-aos="fade-up" data-aos-delay="200" href="{{route($item->url)}}" class="btn-get-started">{{$item->boton}}</a>
                  </div>
                </div>
              </div>
            </div>
            
        </div>
      @endforeach

      <!-- FINAL DEL FOREACH PARA LOS SLIDER-->

      <!-- CONTROLES DEL SLIDER -->
      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- FINAL DEL SLIDER PRINCIPAL -->

  <main id="main">

    <!-- ======= APARTADO INICIAL ======= -->

    <section id="constructions" class="constructions">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>{{$paginas[0]['titulo']}}</h2>
          <p>{{$paginas[0]['descripcion']}}</p>
        </div>

        <div class="row gy-4">
          <!-- DEBERIA HABER UN FOREACH PARA CREAR VARIOS CARDS -->

           @foreach ($config as $item) 
           
         <div class="col-lg-6 aos-init-animate" data-aos="fade-up" data-aos-delay="100">
          <div class="card-item">
            <img class="card-img-top" src="{{$item->imagen}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><a href="{{$item->url}}">{{$item->titulo1}}</a></h5>
              <p class="card-text" style="padding: 20px 0px 20px 0px;">{{$item->descripcion}}</p>
              <button class="boton" style="width: 119px; height: 33px;"><a href="{{$item->url}}">Ver más <i class="bi bi-arrow-right"></i></a></button>
            </div>
          </div>
         </div>

          @endforeach 

         <!-- FINAL DEL CARD -->

          <!-- FIN FOREACH PARA CREAR VARIOS CARDS -->

        </div>
      </div>
    </section>

    <!-- FINAL DEL APARTADO INICIAL -->


    <!-- ======= Services Section ======= -->

    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>{{$proy[0]['titulo']}}</h2>
        </div>

        <div class="row gy-4">

          @foreach ($conf as $item)
              
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="fa fa-cogs" aria-hidden="true"></i>
              </div>
              <h3>{{$item->titulo1}}</h3>
              @php
                  $texto = $item->descripcion;
                  $data = Str::substr($texto, 0,300 );
              @endphp
             <p>{!!$data!!}...</p>
              <br>
              <button class="boton"><a style="margin-top: 0px;" href={{route('proyectos')}} class="readmore stretched-link">Ver más <i class="bi bi-arrow-right"></i></a></button>
            </div>
          </div><!-- End Service Item -->

          @endforeach

        </div>

      </div>
    </section><!-- End Services Section -->


    <!-- ======= SECCION GALERIA DEL RECINTO ======= -->

    <section id="projects" class="projects">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Galeria del Recinto</h2>
          <p>En este apartado se encuentran fotos de algunos espacios del Recinto de Siquirres</p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

            {{-- @foreach ($collection as $item)

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/remodeling-1.jpg" class="img" alt="">
                <div class="portfolio-info">
                  <h4>Remodeling 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/remodeling-1.jpg" title="Remodeling 1" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->
                
            @endforeach --}}

          </div><!-- End Projects Container -->

        </div>

      </div>
    </section>
    
    <!-- FINAL DE LA SECCION SIN UTILIDAD -->

    @include('/informativas/Testimonios/testimonios')


  </main><!-- End #main -->

  @endsection

