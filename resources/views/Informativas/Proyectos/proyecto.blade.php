
@extends('/informativas/Plantilla/plantilla')

@section('nav')

<nav id="navbar" class="navbar">
  <ul>
    <li><a href={{route('inicio')}} >Inicio</a></li>
    <li><a href={{route('nosotros')}}>Nosotros</i></a></li>
    <li><a href={{route('actividades')}} >Actividades</a></li>
    <li><a href={{route('proyectos')}}  class="active"><span>Proyectos</span></a></li>
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

        <h2>{{$proy[0]['titulo']}}</h2>
        <ol>
          <li><a href={{route('inicio')}}>Inicio</a></li>
          <li>{{$proy[0]['titulo']}}</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->

    <section id="blog" class="blog">

      <div class="section-header">
        <h2>{{$proy[0]['titulo']}}</h2>
        <p>{!!$proy[0]['descripcion']!!}</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 posts-list">

          @foreach ($conf as $item)
              
          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="{{$item->imagen}}"  alt="">
              </div>
              <div class="post-content d-flex flex-column">
                <h3 class="post-title">{{$item->titulo1}}</h3>
                @php
                $texto = $item->descripcion;
                $data = Str::substr($texto, 0,300 );
                 @endphp
                <p>{!!$data!!}...</p>
                <hr>
                <button class="boton" style="width: 110px; height: 25px;"><a href="{{ route('proyectoDetallado',$item->id_config)}}" class="readmore stretched-link"><span>Ver más</span><i class="bi bi-arrow-right"></i></a></button>
              </div>

            </div>
          </div><!-- End post list item -->
          
          @endforeach
         
        </div><!-- End blog posts list -->
        
      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

 @endsection