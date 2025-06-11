@extends('/Informativas/Plantilla/plantilla')

@section('nav')

<nav id="navbar" class="navbar">
  <ul>
    <li><a href={{route('inicio')}}>Inicio</a></li>
    <li><a href={{route('nosotros')}}>Nosotros</a></li>
    <li><a href={{route('actividades')}} >Actividades</a></li>
    <li><a href={{route('proyectos')}}>Proyectos</a></li>
    <li><a href={{route('anuario')}} >Anuarios</a></li>
    <li><a href={{route('contacto')}} class="active">Contactanos</a></li>
  </ul>
</nav><!-- FINAL DEL NAVBAR -->
    
@endsection

@section('medio')

  <main>

    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/u.PNG');">
      <div  id="encabezado" class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>{{$contacto[0]['titulo']}}</h2>
        <ol>
          <li><a href={{route('inicio')}}>Inicio</a></li>
          <li>{{$contacto[0]['titulo']}}</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">
    
        <div class="section-header">
          <h2>{{$contacto[0]['titulo']}}</h2>
          <p>{!! $contacto[0]['descripcion'] !!}</p>
        </div>
    
        <div class="row gy-4">
    
          @foreach ($tel as $tel)

            <div id="agenda" class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div id="contacto" class="service-item  position-relative" >
                <div class="icon">
                  <i class="fa fa-address-book" aria-hidden="true"></i>
                </div>
                  <h3>{{$tel->titulo}}</h3>
                  <h6>{{$tel->nombre}}</h6>
                  <p style="display: list-item;">Telefono: {{$tel->numero}}</p>
                  <p style="display: list-item;">Correo: {{$tel->correo}}</p>
                </div>
             
            </div>

          @endforeach
    
        </div>
    
      </div>
    </section>


    <section id="services" class="services section-bg" style="background-color: white;">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Ubicación</h2>
          <p>Podras encontrar un mapa con la localización del Recinto de Siquirres.</p>
        </div>

        <div class="row position-relative" style="margin-top: -21px; margin-bottom: -100px;">

          <div class="imgMapa"><iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d539.3212760945886!2d-83.50450594627898!3d10.09797659155253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa73157aabd9ae3%3A0xb50f1eb95e66a445!2sUniversidad%20de%20Costa%20Rica%20Recinto%20Siquirres!5e0!3m2!1ses-419!2scr!4v1712722305232!5m2!1ses-419!2scr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

          <div class="infoCon">
            <div class="ubicacion">
              <p>Puedes ver el mapa con la ubicación del Recinto o darle click al boton y poder guiarte desde Google Maps</p>
              <br>
              <button class="menu" ><a href="https://maps.app.goo.gl/EHfLkF2hKkF28Vct8"> Google Maps</a></button>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

  </main>


  

@endsection