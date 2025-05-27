
@extends('/informativas/Plantilla/plantilla')

@section('nav')

<nav id="navbar" class="navbar">
  <ul>
    <li><a href={{route('inicio')}}>Inicio</a></li>
    <li><a href={{route('nosotros')}}><span>Nosotros</span></a></li>
    <li><a href={{route('actividades')}}  class="active">Actividades</a></li>
    <li><a href={{route('proyectos')}}><span>Proyectos</span></a></li>
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

        <h2>Actividades</h2>
        <ol>
          <li><a href="index.html">Inicio</a></li>
          <li>Actividades</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= APARTADO DE ACTIVIDADES ======= -->

    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>{{$activ[0]['titulo']}}</h2>
          <p>{{$activ[0]['descripcion']}}</p>
        </div>

        <div class="row gy-4">

          <!-- DEBERIA HABER UN FOREACH PARA CREAR UN APARTADO PARA CADA ACTIVIDAD -->

          @foreach ($con as $item)
              
          <div class="col-lg-6 col-md-8" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <img src="{{ asset('/public/img/' . $item->imagen) }}" alt="Imagen">

                {{-- {!!$item->imagen!!} --}}
              </div>
              <h3>{{$item->titulo1}}</h3>
              <p class="etiqueta" style="-webkit-line-clamp: 5">{{$item->descripcion}}</p>
              <br>
              @if (strcmp($item->url, null) != 0 )

              <button class="boton"><a style="margin-top: 0px" href={{$item->url}} class="readmore stretched-link">Leer más <i class="bi bi-arrow-right"></i></a></button>
              @else

              <button class="boton"><a style="margin-top: 0px" href={{route('detallesActivi',$item->id_config)}} class="readmore stretched-link">Leer más <i class="bi bi-arrow-right"></i></a></button>
              @endif
              
           
            </div>            
          </div>
          
          @endforeach
          <!--FINALIZA EL FOREACH PARA CREAR UN APARTADO PARA CADA ACTIVIDAD -->

        </div>

      </div>
    </section><!-- End Services Section -->


  </main><!-- End #main -->
  
  
  @endsection