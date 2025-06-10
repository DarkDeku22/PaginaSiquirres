@extends('Dashboard/Plantilla/plantilla')

@section('title', 'Actividades - Recinto Siquirres')

@section('index')
    <main id="main" class="main">

        <div class="row pagetitle">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h1 class="mb-0">
                    <i class="bi bi-menu-button-wide-fill"></i> Nosotros
                </h1>

            </div>
            <hr>
            <br>
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                        type="button" role="tab" aria-controls="nav-home" aria-selected="true">Información</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                        type="button" role="tab" aria-controls="nav-profile"
                        aria-selected="false">Administrativos</button>

                    <button class="nav-link" id="nav-student-tab" data-bs-toggle="tab" data-bs-target="#nav-student"
                        type="button" role="tab" aria-controls="nav-profile"
                        aria-selected="false">Estadisticas</button>
                </div>
            </nav>

            <br>
            <br>
            <br>






            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#registrarNosotros"
                        class="btn btn-outline-success float-right">
                        +Registro Nosotros
                    </a>
                    <br>
                    <br>
                    <div class="row pagetitle">
                        @foreach ($pagina as $item)
                            <div class="col-12 col-md-3">


                                <div class="card info-card customers-card animacion">
                                    <img src=" {{ $item->feacture }} " class="card-img-top" alt="..." id="imgNice">


                                    {{-- ELIMINAR ACTIVIDADA --}}
                                    <form action="{{ route('nosotrosSiquirres52.destroy', $item->id_pagina) }} "
                                        method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" data-bs-toggle="modal" data-bs-target="#EliminarPagina1"
                                            class="btn btn-sm btn-danger position-absolute top-0 end-0 rounded-circle"
                                            title="Eliminar Pagina">
                                            <i class="bi bi-trash-fill"></i></button>
                                    </form>
                                    {{-- CIERRE ELIMINAR ACTIVIDADA --}}


                                    <div class="card-body">
                                        <div class="text-center">
                                            <h5 class="card-title"><a href="" target="_blank"
                                                    title="Visitar">{{ $item->titulo1 }}</a>
                                            </h5>
                                            <div class="cartaInfo">
                                                <p class="card-text" style="font-size: 13px;">
                                                    {{ $item->descripcion }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2">
                                            {{-- ABRIR MODAL EDITAR --}}

                                            <a href="#" data-bs-toggle="modal"
                                                data-bs-target="#editarNosotros{{ $item->id_pagina }}"
                                                class="btn btn-primary-personalizado mt-4">Editar</a>

                                            {{-- CIERRE ABRIR MODAL EDITAR --}}

                                        </div>
                                    </div>
                                </div>

                            </div>

                            {{-- MODAL EDITAR NOSOTROS --}}
                            @include('Dashboard/Nosotros/Modales/editarNosotros')
                            {{-- CIERRE MODAL EDITAR NOSOTROS --}}
                        @endforeach





                        {{-- MODAL CREAR NOSOTROS --}}
                             @include('Dashboard/Nosotros/Modales/crearNosotros')
                        {{-- CIERRE MODAL CREAR NOSOTROS --}}




                    </div>
                </div>


                {{-- CONTENIDO 2 TAP --}}
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#registrarAdmin"
                        class="btn btn-outline-success float-right">
                        +Registro Administrativo
                    </a>
                    <br>
                    <br>
                    <div class="row">

                        @foreach ($administrativos as $admin)
                            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                                <div class="card info-card customers-card animacion text-center"
                                    style="font-size: 0.9rem;">

                                    <form action="{{ route('eliminarAdmin', $admin->id_administrativo) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" data-bs-toggle="modal" data-bs-target="#EliminarPagina1"
                                            class="btn btn-sm btn-danger position-absolute top-0 end-0 m-1 rounded-circle"
                                            title="Eliminar Página">
                                            <i class="bi bi-trash-fill"></i>
                                        </button>
                                    </form>

                                    <div class="card-body py-3 px-2">
                                        <!-- Imagen redonda y más pequeña -->
                                        <div class="member-img mb-2">
                                            <img src="{{$admin->imagen}}" class="rounded-circle" alt="Imagen"
                                                style="width: 80px; height: 80px; object-fit: cover;">
                                        </div>

                                        <!-- Info del admin -->
                                        <div class="member-info">
                                            <h6 class="card-title mb-1">{{ $admin->nombre }}</h6>
                                            <small class="text-muted d-block">{{ $admin->puesto }}</small>
                                            <p class="mt-2 mb-2" style="font-size: 0.85rem;">{{ $admin->descripcion }}
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Botón Editar -->
                                    <div class="d-grid gap-1 p-2 pt-0">
                                        <a href="#" data-bs-toggle="modal"
                                            data-bs-target="#editarAdmin{{ $admin->id_administrativo }}"
                                            class="btn btn-sm btn-primary-personalizado">Editar</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                {{-- MODAL EDITAR ADMINISTRATIVO --}}
                 @include('Dashboard/Nosotros/Modales/editarAdmin')
                 {{-- CIERRE MODAL EDITAR ADMINISTRATIVO --}}

                {{-- MODAL CREAR ADMINISTRATIVO --}}
                 @include('Dashboard/Nosotros/Modales/registrarAdmin')
                 {{-- CIERRE MODAL CREAR ADMINISTRATIVO --}}
                    </div>

                   
                </div>{{-- CIERRE CONTENIDO 2 TAP --}}


                {{-- CONTENIDO 3 TAP --}}
                <div class="tab-pane fade" id="nav-student" role="tabpanel" aria-labelledby="nav-student-tab">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#registrarEsta"
                        class="btn btn-outline-success float-right">
                        +Registro Estadistica
                    </a>
                    <br>
                    <br>
                    <div class="row">
                        @foreach ($estadisticas as $esta)
                            <div class="col-lg-3 col-md-6">
                                <div class="card info-card animacion h-100">
                                    <form action="{{route('eliminarEsta',$esta->id_config)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" data-bs-toggle="modal" data-bs-target="#EliminarPagina1"
                                            class="btn btn-sm btn-danger position-absolute top-0 end-0 m-1 rounded-circle"
                                            title="Eliminar Página">
                                            <i class="bi bi-trash-fill"></i>
                                        </button>
                                    </form>
                                    <div class="card-body d-flex align-items-center">
                                        <i class="{{ $esta->url }} color-blue flex-shrink-0 me-3 fs-2"></i>

                                        <div>
                                            <span data-purecounter-start="0"
                                                data-purecounter-end="{{ $esta->descripcion }}"
                                                data-purecounter-duration="1" class="purecounter fs-4"></span>
                                            <p class="mb-0">{{ $esta->titulo1 }}</p>
                                        </div>
                                    </div>

                                    <div class="d-grid gap-1 p-3 pt-0">
                                        <a href="#" data-bs-toggle="modal"
                                            data-bs-target="#editarEsta{{ $esta->id_config}}"
                                            class="btn btn-sm btn-primary-personalizado">Editar</a>
                                    </div>
                                </div>
                            </div>
                            {{-- MODAL EDITAR ESTADISTICA --}}
                            @include('Dashboard/Nosotros/Modales/editarEsta')
                            {{-- CIERRE MODAL EDITAR ESTADISTICA --}}
                        @endforeach
                    </div>

                    {{-- MODAL REGISTRAR ESTADISTICA --}}
                    @include('Dashboard/Nosotros/Modales/registrarEsta')
                    {{-- CIERRE MODAL REGISTRAR ESTADISTICA --}}
                </div>
                {{-- CIERRE CONTENIDO 3 TAP --}}




            </div> {{-- CIERRE TAB --}}
        </div>
    </main>

    <script>
        document.getElementById('editarInput').addEventListener('change', function(event) {
            const [file] = this.files;
            const preview = document.getElementById('editarInputPreview');
            const icon = document.getElementById('editarInputIcon');

            if (file) {
                preview.src = URL.createObjectURL(file);
                preview.style.display = 'block';
                if (icon) icon.style.display = 'none';
            } else {
                preview.src = '#';
                preview.style.display = 'none';
                if (icon) icon.style.display = 'block';
            }
        });
    </script>
    
    <script>
        document.getElementById('editarInput2').addEventListener('change', function(event) {
            const [file] = this.files;
            const preview = document.getElementById('editarInputPreview2');
            const icon = document.getElementById('editarInputIcon2');

            if (file) {
                preview.src = URL.createObjectURL(file);
                preview.style.display = 'block';
                if (icon) icon.style.display = 'none';
            } else {
                preview.src = '#';
                preview.style.display = 'none';
                if (icon) icon.style.display = 'block';
            }
        });
    </script>
@endsection
