@extends('/informativas/Plantilla/plantilla')

@section('nav')

<nav id="navbar" class="navbar">
  <ul>
    <li><a href={{route('inicio')}}>Inicio</a></li>
    <li><a href={{route('nosotros')}}>Nosotros</a></li>
    <li><a href={{route('actividades')}} >Actividades</a></li>
    <li><a href={{route('proyectos')}}>Proyectos</a></li>
    <li><a href={{route('anuario')}} class="active">Anuarios</a></li>
    <li><a href={{route('contacto')}}>Contactanos</a></li>
  </ul>
</nav><!-- FINAL DEL NAVBAR -->
    
@endsection

@section('medio')

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/u.PNG');">
    <div  id="anuarioUCR" class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Anuarios</h2>
      <ol>
        <li><a href={{route('inicio')}}>Inicio</a></li>
        <li>Anuarios</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Our Projects Section ======= -->
  <section id="projects" class="projects">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>{{$anuario[0]['titulo']}}</h2>
        <p>{!! $anuario[0]['descripcion'] !!}</p>
      </div>

      <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

        <div id="contenedorbtn" class="btn-group" role="group" aria-label="Button group with nested dropdown">
          <div class="btn-group" role="group">
            <button id="btngeneracion" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                {{ $actual['titulo'] ?? 'Generación' }}
            </button>
            <ul class="dropdown-menu">
                @foreach ($generaciones as $item)
                    <li>
                        <a 
                            class="dropdown-item {{ $actual && $actual['id_imagen'] == $item['id_imagen'] ? 'active' : '' }}" 
                            href="{{ route('generacion', $item['id_imagen']) }}"
                        >
                            {{ $item['titulo'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        
        </div>

        <div class="section-header">
          @if (isset($base[0]['titulo']))
              <h2>{{ $actual['titulo'] }}</h2>
          @else
              <h2>Todas las Generaciones</h2>
          @endif
      </div>
      


        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

          @foreach ($img as $item)

          <div class="col-lg-3 col-md-2 portfolio-item" style="text-align: center;">
            <div class="portfolio-content h-100">
              <img src={{$item->url}} style= "width: 250px; height: 350px;" class="img" alt="">
              <div class="portfolio-info">
                <h4> {{$item->titulo}}</h4>
                <p style="text-align: center;">{!!$item->descripcion!!}</p>
                <a href={{$item->url}} title="{!!$item->descripcion!!}" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
               </div>
            </div>
          </div>

          @endforeach

        </div><!-- End Projects Container -->

      </div>

    </div>
  </section><!-- End Our Projects Section -->

</main><!-- End #main -->


  

@endsection