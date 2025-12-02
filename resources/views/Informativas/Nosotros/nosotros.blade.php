@extends('/informativas/Plantilla/plantilla')

@section('nav')
    <nav id="navbar" class="navbar">
        <ul>
            <li><a href={{ route('inicio') }}>Inicio</a></li>
            <li><a href={{ route('nosotros') }} class="active"><span>Nosotros</span></a></li>
            <li><a href={{ route('actividades') }}>Actividades</a></li>
            <li><a href={{ route('proyectos') }}><span>Proyectos</span></a></li>
            <li><a href={{ route('anuario') }}>Anuarios</a></li>
            <li><a href={{ route('contacto') }}>Contactanos</a></li>

        </ul>
    </nav><!-- FINAL DEL NAVBAR -->
@endsection

@section('medio')
    <main id="main">

        <!-- ======= APARTADO INICIAL ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/u.PNG');">
            <div id="encabezado" class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Nosotros</h2>
                <ol>
                    <li><a href={{ route('inicio') }}>Inicio</a></li>
                    <li>Nosotros</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- =======  ANTECEDENTES DEL RECINTO ======= -->

        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row position-relative">

                    <div id="ImgAnte" class="col-lg-7 about-img"
                        style="background-image: url({{ $hijasNosotros[0]['feacture'] }});"></div>

                    <div class="col-lg-7">
                        <h2>Antecendentes</h2>
                        <div class="our-story">
                            <h4>Año 2013</h4>
                            <h3>{{ $hijasNosotros[0]['titulo'] }}</h3>
                            @php
                                $texto = $hijasNosotros[0]['descripcion'];
                                $data = Str::substr($texto, 3, 616);
                            @endphp
                            <p>{!! $data !!}...</p>
                            <br>
                            <button class="boton"><a href={{ route('detalles', 4) }}>Leer más <i
                                        class="bi bi-arrow-right"></i></a></button>
                        </div>
                    </div>
                </div>

            </div>

            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= SE PUEDE UTILIZAR PARA VER LOS ESTUDIANTES ACTIVOS, GRADUADIOS, ETC.... ======= -->

        <section id="stats-counter" class="stats-counter section-bg">
            <div class="container">

                <div class="row gy-4">

                    @foreach ($config as $item)
                        <div class="col-lg-3 col-md-6">
                            <div class="stats-item d-flex align-items-center w-100 h-100">
                                <i class="{{ $item['url'] }} color-blue flex-shrink-0"></i>
                                <div>
                                    <span data-purecounter-start="0" data-purecounter-end={{ $item['descripcion'] }}
                                        data-purecounter-duration="1" class="purecounter"></span>
                                    <p>{{ $item['titulo1'] }}</p>
                                </div>
                            </div>
                        </div><!-- End Stats Item -->
                    @endforeach

                </div>

            </div>
        </section><!-- FINAL DEL APARTADO DE ESTADISTICAS -->

        <!-- ======= INFORMACION DE LA AERSI ======= -->
        <section id="alt-services" class="alt-services">
            <div class="container" data-aos="fade-up">

                <div class="row justify-content-around gy-4">
                    <div id="imgPrincipal" class="col-lg-6 img-bg"
                        style="background-image: url({{ $hijasNosotros[1]['feacture'] }});" data-aos="zoom-in"
                        data-aos-delay="100"></div>

                    <div class="col-lg-5 d-flex flex-column justify-content-center">
                        <h3>{{ $hijasNosotros[1]['titulo'] }}</h3>
                        <p>{!! $hijasNosotros[1]['descripcion'] !!}</p>
                    </div>
                </div>

            </div>
        </section><!-- End Alt Services Section -->

        <!-- ======= APARTADO DE LA CARRERA ======= -->
        <section id="alt-services-2" class="alt-services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="row justify-content-around gy-4">
                    <div class="col-lg-5 d-flex flex-column justify-content-center">
                        <h3>{{ $hijasNosotros[2]['titulo'] }}</h3>
                        @php
                            $texto = $hijasNosotros[2]['descripcion'];
                            $data = Str::substr($texto, 3, 900);
                        @endphp
                        <p>{!! $data !!}...</p>
                        <br>
                        <button class="boton" style="width: 110px"><a
                                href={{ route('detalles', $hijasNosotros[2]['id_pagina']) }}>Leer más <i
                                    class="bi bi-arrow-right"></i></a></button>
                    </div>

                    <div id="imgPrincipal" class="col-lg-6 img-bg"
                        style="background-image: url({{ $hijasNosotros[2]['feacture'] }});" data-aos="zoom-in"
                        data-aos-delay="100"></div>
                </div>

            </div>
        </section><!-- End Alt Services Section 2 -->

        <!-- ======= APARTADO PARA LOS PROFESORES ======= -->
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>{{ $profes[0]['titulo'] }}</h2>
                    <p>{{ $profes[0]['descripcion'] }}</p>
                </div>

                <div class="row gy-5">

                    <!-- UN FOREACH QUE RECORRA ESTE APARTADO PARA QUE SE PUEDA CREAR VARIOS APARTADOS -->

                    @foreach ($admin as $admi)
                        <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img style="width:200px; height:200px; object-fit:cover; border-radius:50%; display:block; margin:0 auto;" alt="" src="{{ $admi->imagen }}" class="img-fluid" alt="">
                            </div>
                            <div class="member-info text-center">
                                <h4>{{ $admi->nombre }}</h4>
                                <span>{{ $admi->puesto }}</span>
                                <p>{{ $admi->descripcion }}</p>
                            </div>
                        </div>
                    @endforeach

                    <!-- FINAL DEL FOREACH QUE RECORRA ESTE APARTADO PARA QUE SE PUEDA CREAR VARIOS APARTADOS -->

                </div>

            </div>
        </section><!-- End Our Team Section -->

        @include('/informativas/Testimonios/testimonios')

    </main><!-- End #main -->
@endsection
