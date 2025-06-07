@extends('Dashboard/Plantilla/plantilla')

@section('title', 'Inicio - Recinto Siquirres')

@section('index')
    <main id="main" class="main">

        <div class="row pagetitle">

            <div class="col-12 col-md-9 mb-3">

                <h1><i class="bi bi-grid-fill"></i> Inicio</h1>
                <hr>
                <br>
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                            type="button" role="tab" aria-controls="nav-home" aria-selected="true">Slider</button>
                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                            type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Páginas</button>
                    </div>
                </nav>


                <div class="tab-content" id="nav-tabContent">

                    {{-- CONTENIDO DEL SLIDER --}}
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">



                        <section class="section dashboard">

                            <a name="listaSlides"></a>

                            <!-- alertas slide-->

                            @if (session('registrarSlide'))
                                <div class="alert alert-success alert-dismissible fade show">
                                    <i class="bi bi-check-circle me-1"></i>
                                    {{ session('registrarSlide') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            @if (session('editadoSlide'))
                                <div class="alert alert-success alert-dismissible fade show">
                                    <i class="bi bi-check-circle me-1"></i>
                                    {{ session('editadoSlide') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            @if (session('eliminarSlide'))
                                <div class="alert alert-success alert-dismissible fade show">
                                    <i class="bi bi-check-circle me-1"></i>
                                    {{ session('eliminarSlide') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            @if ($data->isEmpty())
                                <div class="text-center mb-3">

                                    <h5 class="text-secondary">Presione el botón "+Resgistrar Slide" para registrar un slide
                                    </h5>

                                </div>
                            @else
                                <div class="row">
                                    @foreach ($data as $item)
                                        <div class="col-12 col-md-4 mb-3">
                                            <div class="card info-card sales-card animacion">

                                                <div class="card-body p-4 card-body-opciones">

                                                    <div class="d-flex align-items-center">
                                                        <div
                                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                            <i class="bi bi-sliders"></i>
                                                        </div>
                                                        <div class="ps-3">
                                                            <h5>
                                                                <a class="colorTitulos" data-bs-toggle="modal"
                                                                    data-bs-target="#editarSlide{{ $item->id_silader }}"
                                                                    title="Editar Slide"
                                                                    href="">{{ $item->titulo }}</a>
                                                            </h5>

                                                            <h6 style="font-size: 10px;">Slide</h6>

                                                        </div>
                                                        <div class="">
                                                            <div class="position-absolute top-0 end-0 d-flex">
                                                                <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#editarSlide{{ $item->id_silader }}"
                                                                    class="btn btn-sm btn-primary-personalizado rounded-circle me-1 d-md-none"
                                                                    title="Editar Slide">
                                                                    <i class="bi bi-pencil-square"></i></a>

                                                                <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#EliminarSlide{{ $item->id_silader }}"
                                                                    class="btn btn-sm btn-danger rounded-circle"
                                                                    title="Eliminar Slide">
                                                                    <i class="bi bi-trash-fill"></i></a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <!--Modal editar slide-->
                                        <div class="modal fade" id="editarSlide{{ $item->id_silader }}">
                                            <div
                                                class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title colorTitulos">
                                                            Editar el slide: {{ $item->titulo }}</h5>
                                                        <button class="btn btn-sm btn-outline-danger"
                                                            data-bs-dismiss="modal">X</button>
                                                    </div>

                                                    <div class="modal-body">

                                                        <form action="" method="POST" enctype="multipart/form-data">
                                                            @method('put')
                                                            @csrf

                                                            <div class="px-2 py-2">
                                                                <div class="row">

                                                                    <div class="col-lg-6 col-md-12">

                                                                        <div class="">
                                                                            <label for="">Título</label>

                                                                            <input type="text"
                                                                                class="form-control colorImput"
                                                                                name="titulo" value="{{ $item->titulo }}"
                                                                                placeholder="Escriba el titulo"
                                                                                maxlength="50" required>
                                                                        </div>

                                                                        <div class="mt-3">
                                                                            <label for="">URL</label>

                                                                            <input type="text"
                                                                                class="form-control colorImput"
                                                                                name="url"
                                                                                value="{{ $item->url }}"
                                                                                placeholder="Escriba la URL del sitio"
                                                                                maxlength="300" required>
                                                                        </div>

                                                                        <div class="mt-3">
                                                                            <label for="">Botón</label>

                                                                            <input type="text"
                                                                                class="form-control colorImput"
                                                                                name="btnTitulo"
                                                                                value="{{ $item->boton }}"
                                                                                placeholder="Titulo del botón"
                                                                                maxlength="50" required>
                                                                        </div>

                                                                        <div class="mt-3 mb-3">
                                                                            <label for="">Descripción</label>

                                                                            <textarea class="form-control colorImput" id="" placeholder="Escribir la descripción" rows="4"
                                                                                name="subtitulo" maxlength="300">{{ $item->subtitulo }}</textarea>
                                                                        </div>


                                                                    </div>

                                                                    <div class="col-lg-6 col-md-12">

                                                                        <div class="">
                                                                            <label for="nueva_img"
                                                                                class="form-label">Insertar
                                                                                imagen:</label>
                                                                            <input
                                                                                class="form-control colorImput form-control2 input-imagen"
                                                                                type="file" name="nueva_img"
                                                                                maxlength="100" accept="image/*"
                                                                                id="editarSlideInput">

                                                                            @if ($item->img)
                                                                                <div class="text-center">
                                                                                    <img src="/img/{{ $item->img }}"
                                                                                        class="mt-2 rounded img-fluid custom-img"
                                                                                        alt="{{ $item->img }}">
                                                                                </div>
                                                                            @endif
                                                                        </div>


                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="modal-footer">

                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Cancelar</button>
                                                                <button type="submit"
                                                                    class="btn btn-primary-personalizado">Actualizar</button>

                                                            </div>

                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <!-- modal Pagina Eliminar-->

                                        <div class="modal fade" id="EliminarSlide{{ $item->id_silader }}">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title colorTitulos">
                                                            Eliminar el slide: {{ $item->titulo }}</h5>
                                                        <button class="btn btn-sm btn-outline-danger"
                                                            data-bs-dismiss="modal">X</button>
                                                    </div>

                                                    <div class="modal-body">

                                                        ¿Estás seguro de que
                                                        deseas eliminar
                                                        este slide?

                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Cancelar</button>

                                                        <form action="" method="POST">
                                                            @method('delete')
                                                            @csrf
                                                            <button type="submit"
                                                                class="btn btn-danger">Eliminar</button>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </section>

                    </div>
                    {{-- CIERRE CONTENIDO DEL SLIDER --}}



                    {{-- CONTENIDO DE LAS PAGINAS --}}
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <h1>HOLA BB</h1>

                        <section>

                            <hr class=" mb-4">

                            <!-- alertas pagina-->

                            @if (session('editadoInformacion'))
                                <div class="alert alert-success alert-dismissible fade show">
                                    <i class="bi bi-check-circle me-1"></i>
                                    {{ session('editadoInformacion') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            <div class="row">
                                @foreach ($dataPagina as $pagina)
                                    <a name="{{ $pagina->titulo }}"></a>
                                    <div class="col-xxl-12 col-xl-12">

                                        <div class="card info-card customers-card animacion">

                                            <div class="card-body">
                                                <h5 class="card-title">{{ $pagina->titulo }}</h5>

                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#editar{{ $pagina->id_pagina }}"
                                                    class="btn btn-sm btn-primary-personalizado position-absolute top-0 end-0 rounded-circle"
                                                    title="Editar información">
                                                    <i class="bi bi-pencil-square" style="color: white"></i></a>

                                                <div class="d-flex align-items-center">

                                                    <div class="ps-3">

                                                        <div class="cartaDescripcion">

                                                            <p>{{ $pagina->descripcion }}</p>

                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                    <!-- Inicio modal Editar-->
                                    <div class="modal fade" id="editar{{ $pagina->id_pagina }}">
                                        <div class="modal-dialog modal-dialog-centered modal-None modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title colorTitulos">
                                                        Configurar Datos del encabezado, sección de Inicio</h5>
                                                    <button class="btn btn-sm btn-outline-danger"
                                                        data-bs-dismiss="modal">X</button>
                                                </div>
                                                <div class="modal-body">

                                                    <form action="{{ route('editarPag', $pagina->id_pagina) }}" method="POST">
                                                        @method('put')
                                                        @csrf

                                                        <div class="px-3 py-2">

                                                            <div>
                                                                <label for="">Título</label>
                                                            </div>
                                                            <div class="">

                                                                <input type="hidden" name="id_padre" value="1">

                                                                <input type="text" class="form-control colorImput"
                                                                    name="tituPagina" maxlength="100"
                                                                    value="{{ $pagina->titulo }}"
                                                                    placeholder="Escriba el título" required>
                                                            </div>
                                                            <div class="mt-3">
                                                                <label for="">Contenido</label>
                                                            </div>
                                                            <div class="mb-4">
                                                                <div>
                                                                    <textarea class="form-control colorImput" id="" rows="10" name="desPagina"
                                                                        placeholder="Escriba la información">{{ $pagina->descripcion }}</textarea>
                                                                </div>
                                                            </div>


                                                        </div>

                                                        <div class="modal-footer">

                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Cancelar</button>
                                                            <button type="submit"
                                                                class="btn btn-primary-personalizado">Actualizar</button>

                                                        </div>

                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <!-- alertas Imagen-->

                            @if (session('editadoImagen'))
                                <div class="alert alert-success alert-dismissible fade show">
                                    <i class="bi bi-check-circle me-1"></i>
                                    {{ session('editadoImagen') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            <a name="imagenes"></a>

                            <div class="row">
                                @foreach ($dataImagen as $imagen)
                                    <div class="col-12 col-md-6">
                                        <div class="card info-card customers-card animacion">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $imagen->titulo }}</h5>

                                                <!-- Cambia el href="#" por un onclick en el botón -->
                                                <a href="javascript:void(0);" onclick="toggleDarkMode(this)"
                                                    class="btn btn-sm btn-secondary position-absolute top-0 end-0 rounded-circle"
                                                    title="modo oscuro">
                                                    <i class="bi bi-moon-fill"></i>
                                                </a>

                                                <div class="">
                                                    <div class="">
                                                        <form action="" method="POST"
                                                            enctype="multipart/form-data">
                                                            @method('put')
                                                            @csrf
                                                            <input type="hidden" name="id_pagina" value="1">
                                                            <input type="hidden" name="titulo"
                                                                value="{{ $imagen->titulo }}">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <input
                                                                        class="form-control colorImput form-control2 input-imagen"
                                                                        type="file" name="nueva_imagen"
                                                                        accept="image/*" id="editarSlideInput"
                                                                        maxlength="250" required>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <button type="submit"
                                                                        class="btn btn-primary-personalizado btn-sm">Cambiar</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        @if ($imagen->descripcion)
                                                            <div class="text-center">
                                                                <img src="/img/{{ $imagen->descripcion }}"
                                                                    class="mt-3 rounded img-fluid"
                                                                    alt="{{ $imagen->descripcion }}">
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                @endforeach
                            </div>

                            <hr class="mb-5">

                            <div class="row pagetitle">

                                <div class="col-12 col-md-8 mb-3">

                                    <a name="listaPaginas"></a>
                                    <h1>Lista de Páginas</h1>
                                    <nav>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="">Inicio</a></li>
                                            <li class="breadcrumb-item"><a href="#listaSlides">Lista de Slides</a></li>
                                            @foreach ($dataPagina as $ite)
                                                <li class="breadcrumb-item active"><a
                                                        href="#{{ $ite->titulo }}">{{ $ite->titulo }}</a>
                                                </li>
                                            @endforeach
                                            <li class="breadcrumb-item"><a href="#imagenes">Imagenes</a></li>
                                        </ol>
                                    </nav>

                                </div>

                                <div class="col-12 col-md-4 mb-3">

                                    <div class="float-md-end float-start">

                                        <a href="#" data-bs-toggle="modal" data-bs-target="#registrarPagina"
                                            class="btn btn-outline-success float-right">+Registrar Página</a>

                                    </div>

                                    <div class="modal fade" id="registrarPagina">
                                        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title colorTitulos">
                                                        Registrar una nueva página</h5>
                                                    <button class="btn btn-sm btn-outline-danger"
                                                        data-bs-dismiss="modal">X</button>
                                                </div>

                                                <div class="modal-body">

                                                    <form action="{{ route('administradorSiquirres52.store') }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf

                                                        <div class="px-2 py-2">
                                                            <div class="row">

                                                                <div class="col-lg-6 col-md-12">

                                                                    <div class="">
                                                                        <label for="">Título</label>

                                                                        <input type="hidden" name="id_pagina"
                                                                            value="1">

                                                                        <input type="text"
                                                                            class="form-control colorImput" name="titulo"
                                                                            value="" placeholder="Escriba el título"
                                                                            maxlength="70" required>
                                                                    </div>

                                                                    <div class="mt-4">
                                                                        <label for="">URL</label>

                                                                        <input type="text"
                                                                            class="form-control colorImput" name="url"
                                                                            value="" maxlength="300"
                                                                            placeholder="Escriba la URL del sitio"
                                                                            required>
                                                                    </div>

                                                                    <div class="mt-4 mb-3">
                                                                        <label for="">Descripción</label>

                                                                        <textarea class="form-control colorImput" id="" placeholder="Escribir la descripción" rows="5"
                                                                            name="descripcion"></textarea>
                                                                    </div>


                                                                </div>

                                                                <div class="col-lg-6 col-md-12">

                                                                    <div class="">
                                                                        <label for="nuevoInput"
                                                                            class="form-label">Insertar
                                                                            imagen:</label>
                                                                        <input type="file"
                                                                            class="form-control input-imagen colorImput form-control2"
                                                                            id="registrarInput" maxlength="100"
                                                                            name="imagen" accept="image/*">

                                                                        <div class="text-center">

                                                                            <img src="#"
                                                                                alt="Vista previa de la imagen"
                                                                                id="registrarInput-preview"
                                                                                class="mt-4 rounded imagen-preview img-fluid custom-img"
                                                                                style="width:300px; height: 200px; object-fit: cover; display: none;">

                                                                            <i id="registrarInput-icon"
                                                                                class="bi bi-images"
                                                                                style="font-size: 50px; color: #7a7777;"></i>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Cancelar</button>
                                                            <button type="submit"
                                                                class="btn btn-success">Registrar</button>
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <!-- alertas config-->

                            @if (session('registrarPagina'))
                                <div class="alert alert-success alert-dismissible fade show">
                                    <i class="bi bi-check-circle me-1"></i>
                                    {{ session('registrarPagina') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            @if (session('editadoPagina'))
                                <div class="alert alert-success alert-dismissible fade show">
                                    <i class="bi bi-check-circle me-1"></i>
                                    {{ session('editadoPagina') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            @if (session('eliminarPagina'))
                                <div class="alert alert-success alert-dismissible fade show">
                                    <i class="bi bi-check-circle me-1"></i>
                                    {{ session('eliminarPagina') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            @if ($dataConfig->isEmpty())
                                <div class="text-center mb-3">

                                    <h5 class="text-secondary">Presione el botón "+Resgistrar" para registrar una página
                                    </h5>

                                </div>
                            @else
                                <div class="row">
                                    @foreach ($dataConfig as $ite)
                                        <div class="col-12 col-md-3">

                                            <div class="card info-card customers-card animacion">

                                                <img src="{{ $ite->imagen }}" class="card-img-top" alt="..."
                                                    id="imgNice">

                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#EliminarPagina{{ $ite->id_config }}"
                                                    class="btn btn-sm btn-danger position-absolute top-0 end-0 rounded-circle"
                                                    title="Eliminar Pagina">
                                                    <i class="bi bi-trash-fill"></i></a>

                                                <div class="card-body">

                                                    <div class="text-center">

                                                        <h5 class="card-title"><a href=" {{ $ite->url }} "
                                                                target="_blank" title="Visitar">{{ $ite->titulo1 }} </a>
                                                        </h5>
                                                        <div class="cartaInfo">
                                                            <p class="card-text" style="font-size: 13px;">
                                                                {{ $ite->descripcion }}</p>
                                                        </div>

                                                    </div>

                                                    <div class="d-grid gap-2">

                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#editarPagina{{ $ite->id_config }}"
                                                            class="btn btn-primary-personalizado mt-4">Editar</a>

                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                        <!-- modal Pagina editar-->

                                        <div class="modal fade" id="editarPagina{{ $ite->id_config }}">
                                            <div
                                                class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title colorTitulos">
                                                            Editando la página: {{ $ite->titulo1 }}</h5>
                                                        <button class="btn btn-sm btn-outline-danger"
                                                            data-bs-dismiss="modal">X</button>
                                                    </div>

                                                    <div class="modal-body">

                                                        <form action="" method="POST"
                                                            enctype="multipart/form-data">
                                                            @method('put')
                                                            @csrf

                                                            <div class="px-2 py-2">
                                                                <div class="row">

                                                                    <div class="col-lg-6 col-md-12">

                                                                        <div class="">
                                                                            <label for="">Título</label>

                                                                            <input type="hidden" name="id_pagina"
                                                                                value="1">

                                                                            <input type="text"
                                                                                class="form-control colorImput"
                                                                                name="titulo"
                                                                                value="{{ $ite->titulo1 }}"
                                                                                placeholder="Escriba el titulo"
                                                                                maxlength="70" required>
                                                                        </div>

                                                                        <div class="mt-4">
                                                                            <label for="">URL</label>

                                                                            <input type="text"
                                                                                class="form-control colorImput"
                                                                                name="url" maxlength="300"
                                                                                value="{{ $ite->url }}"
                                                                                placeholder="Escriba la URL del sitio"
                                                                                required>
                                                                        </div>

                                                                        <div class="mt-4 mb-3">
                                                                            <label for="">Descripción</label>

                                                                            <textarea class="form-control colorImput" id="" placeholder="Escribir la descripción" rows="5"
                                                                                name="descripcion">{{ $ite->descripcion }}</textarea>
                                                                        </div>


                                                                    </div>

                                                                    <div class="col-lg-6 col-md-12">

                                                                        <div class="">
                                                                            <label for="nueva_imagen"
                                                                                class="form-label">Insertar
                                                                                imagen:</label>
                                                                            <input
                                                                                class="form-control colorImput form-control2 input-imagen"
                                                                                type="file" name="nueva_imagen"
                                                                                accept="image/*" id="editarSlideInput"
                                                                                maxlength="300">

                                                                            @if ($ite->imagen)
                                                                                <div class="text-center">
                                                                                    <img src="/img/{{ $ite->imagen }}"
                                                                                        class="mt-2 rounded img-fluid custom-img"
                                                                                        alt="{{ $ite->imagen }}">
                                                                                </div>
                                                                            @endif
                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Cancelar</button>
                                                                <button type="submit"
                                                                    class="btn btn-primary-personalizado">Actualizar</button>
                                                            </div>

                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                        <!-- modal Pagina Eliminar-->

                                        <div class="modal fade" id="EliminarPagina{{ $ite->id_config }}">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title colorTitulos">
                                                            Eliminar la página: {{ $ite->titulo1 }}</h5>
                                                        <button class="btn btn-sm btn-outline-danger"
                                                            data-bs-dismiss="modal">X</button>
                                                    </div>

                                                    <div class="modal-body">

                                                        ¿Estás seguro de que
                                                        deseas eliminar
                                                        esta página?

                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Cancelar</button>
                                                      
                                                        <form action="{{route('eliminarP', $ite->id_config)}}" method="POST">
                                                            @method('delete')
                                                            @csrf
                                                            <input type="hidden" name="tab" id="activeTabInput" value="{{ request('tab') }}">
                                                            <button type="submit"
                                                                class="btn btn-danger">Eliminar</button>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif

                        </section>

                    </div>
                    {{-- CIERRE CONTENIDO DE LAS PAGINAS --}}

                </div>



            </div>

            {{-- MODAL VISTA PREVIA --}}

            <div class="col-12 col-md-3 mb-3">
                <div class="float-md-end float-start">
                    <button type="button" class="btn btn-info" data-bs-toggle="modal"
                        data-bs-target="#modalVistaPrevia">
                        Vista previa de página
                    </button>

                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modalVistaPrevia" tabindex="-1" aria-labelledby="modalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalLabel">Vista previa de la página informativa</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Cerrar"></button>
                        </div>
                        <div class="modal-body p-0">
                            <iframe src="{{ route('inicio') }}" width="100%" height="600px" frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            {{-- CIERRE MODAL VISTA PREVIA --}}





            <div class="modal fade" id="registrarSlide">
                <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title colorTitulos">
                                Registrar un nuevo Slide</h5>
                            <button class="btn btn-sm btn-outline-danger" data-bs-dismiss="modal">X</button>
                        </div>

                        <div class="modal-body">

                            <form action="" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="px-2 py-2">
                                    <div class="row">

                                        <div class="col-lg-6 col-md-12">

                                            <div class="">
                                                <label for="">Título</label>

                                                <input type="text" class="form-control colorImput" name="titulo"
                                                    value="" placeholder="Escriba el título" maxlength="50"
                                                    required>
                                            </div>

                                            <div class="mt-3">
                                                <label for="">URL</label>

                                                <input type="text" class="form-control colorImput" name="url"
                                                    value="" placeholder="Escriba la URL del sitio" maxlength="300"
                                                    required>
                                            </div>

                                            <div class="mt-3">
                                                <label for="">Botón</label>

                                                <input type="text" class="form-control colorImput" name="btnTitulo"
                                                    value="" placeholder="Titulo del botón" maxlength="50"
                                                    required>
                                            </div>

                                            <div class="mt-3 mb-3">
                                                <label for="">Descripción</label>

                                                <textarea class="form-control colorImput" id="" placeholder="Escribir la descripción" rows="4"
                                                    name="subtitulo" maxlength="300" required></textarea>
                                            </div>


                                        </div>

                                        <div class="col-lg-6 col-md-12">

                                            <div class="">
                                                <label for="nuevoInput" class="form-label">Insertar
                                                    imagen:</label>
                                                <input type="file"
                                                    class="form-control input-imagen colorImput form-control2"
                                                    id="nuevoInput" name="img" accept="image/*" maxlength="100"
                                                    required>
                                                <div class="text-center">

                                                    <img src="#" alt="Vista previa de la imagen"
                                                        id="nuevoInput-preview"
                                                        class="mt-4 rounded imagen-preview img-fluid custom-img"
                                                        style="width:300px; height: 200px; object-fit: cover; display: none;">

                                                    <i id="nuevoInput-icon" class="bi bi-images"
                                                        style="font-size: 50px; color: #7a7777;"></i>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="modal-footer">

                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-success">Registrar</button>

                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        </div>





        <!-- Paginación -->


    </main><!-- End #main -->
@endsection
