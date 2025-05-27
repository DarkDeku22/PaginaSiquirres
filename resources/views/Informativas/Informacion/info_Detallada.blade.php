
@extends('/informativas/plantilla')

@section('nav')

<nav id="navbar" class="navbar">
  <ul>
    <li><a href="{{ route('inicio') }}" >Inicio</a></li>
    <li><a href="{{ route('nosotros')}}"class="active"><span>Nosotros</span></a></li>
    <li><a href= {{route('actividades')}}>Actividades</a></li>
    <li><a href="{{route('proyectos')}}" ><span>Proyectos</span></a></li>
    <li><a href={{route('anuario')}}>Anuarios</a></li>
    <li><a href={{route('contacto')}}>Contactanos</a></li>
  </ul>
</nav><!-- FINAL DEL NAVBAR -->
    
@endsection

@section('medio')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/u.PNG');">
      <div id="encabezado" class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>{{$info[0]['titulo']}}</h2>
        <ol>
          <li><a href={{route('inicio')}}>Inicio</a></li>
          <li>{{$info[0]['titulo']}}</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Projet Details Section ======= -->
    <section id="project-details" class="project-details">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row justify-content-between gy-4 mt-4">

          <div class="col-lg-8">
            <div class="portfolio-description">
              <h2>{{$info[0]['titulo']}}</h2>
              <p>
                {!!$info[0]['descripcion']!!}
              </p>
             </div>
          </div>

        </div>

      </div>
    </section><!-- End Projet Details Section -->

  </main><!-- End #main -->

 @endsection