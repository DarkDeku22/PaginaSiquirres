@extends('/informativas/plantilla')

@section('nav')

<nav id="navbar" class="navbar">
  <ul>
    <li><a href={{route('inicio')}}>Inicio</a></li>
    <li><a href={{route('nosotros')}}><span>Nosotros</span></a></li>
    <li><a href={{route('actividades')}} class="active">Actividades</a></li>
    <li><a href={{route('proyectos')}}><span>Proyectos</span> </a></li>
    <li><a href={{route('anuario')}}>Anuarios</a></li>
    <li><a href={{route('contacto')}}>Contactanos</a></li>
  </ul>
</nav><!-- FINAL DEL NAVBAR -->
    
@endsection

@section('medio')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/u.PNG');">
      <div  id="encabezado" class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>{{$info[0]['titulo1']}}</h2>
        <ol>
          <li><a href={{route('inicio')}}>Inicio</a></li>
          <li>{{$info[0]['titulo1']}}</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Service Details Section ======= -->
    
    <section id="service-details" class="service-details">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-4">
          </div>

          <div class="col-lg-8">
            
            <h3>{{$info[0]['titulo1']}}</h3>
            <p>{!!$info[0]['descripcion']!!} </p>
          </div>

        </div>

         <!-- GALERIA DE FOTOS -->
          <section id="projects" class="projects">
            <div class="container" data-aos="fade-up">

              <div class="section-header">
                <h2>Galeria de {{$info[0]['titulo1']}}</h2>
              </div>

              <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">
                  <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                  
                      @foreach ($img as $item)

                          <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                            <div class="portfolio-content h-100">
                              <img src={{$item->url}} class="img-fluid" alt="">
                              <div class="portfolio-info">
                                <a href={{$item->url}} data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                          </div>
                              
                    @endforeach
                </div>
              </div>

            </div>
          </section>

        </div>
      </section>

  </main><!-- End #main -->

  @endsection