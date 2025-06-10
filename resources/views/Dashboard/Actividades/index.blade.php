@extends('Dashboard/Plantilla/plantilla')

@section('title', 'Actividades - Recinto Siquirres')

@section('index')
    <main id="main" class="main">

        <div class="row pagetitle">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h1 class="mb-0">
                    <i class="bi bi-file-text-fill"></i> Actividades
                </h1>
                <a href="#" data-bs-toggle="modal" data-bs-target="#registrarPagina"
                    class="btn btn-outline-success float-right">
                    +Registrar Actividad
                </a>
            </div>
            <hr>
            <br>


            <div class="card info-card customers-card animacion">

                <div class="card-body">
                    <h5 class="card-title">{{ $pagina[0]->titulo }}</h5>

                    <a href="#" data-bs-toggle="modal" data-bs-target="#editarPagina{{ $pagina[0]->id_pagina }}"
                        class="btn btn-sm btn-primary-personalizado position-absolute top-0 end-0 rounded-circle"
                        title="Editar información">
                        <i class="bi bi-pencil-square" style="color: white"></i></a>

                    <div class="d-flex align-items-center">

                        <div class="ps-3">

                            <div class="cartaDescripcion">

                                <p>{{ $pagina[0]->descripcion }}</p>

                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <!-- MODAL DE EDITAR ACTIVIDAD PRINCIPAL -->
            <div class="modal fade" id="editarPagina{{ $pagina[0]->id_pagina }}">
                <div class="modal-dialog modal-dialog-centered modal-None modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title colorTitulos">
                                Configurar Datos del encabezado, sección de <strong>Actividades </strong></h5>
                            <button class="btn btn-sm btn-outline-danger" data-bs-dismiss="modal">X</button>
                        </div>
                        <div class="modal-body">

                            <form action="{{ route('actividadPrincipal', $pagina[0]->id_pagina) }}" method="POST">
                                @method('put')
                                @csrf

                                <div class="px-3 py-2">

                                    <div>
                                        <label for="">Título</label>
                                    </div>
                                    <div class="">

                                        <input type="hidden" name="id_padre" value="{{ $pagina[0]->id_pagina }}">

                                        <input type="text" class="form-control colorImput" name="tituActividad"
                                            maxlength="100" value="{{ $pagina[0]->titulo }}" placeholder="Escriba el título"
                                            required>
                                    </div>
                                    <div class="mt-3">
                                        <label for="">Contenido</label>
                                    </div>
                                    <div class="mb-4">
                                        <div>
                                            <textarea class="form-control colorImput" id="" rows="10" name="tituDes"
                                                placeholder="Escriba la información">{{ $pagina[0]->descripcion }}</textarea>
                                        </div>
                                    </div>


                                </div>

                                <div class="modal-footer">

                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary-personalizado">Actualizar</button>

                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>

            {{-- CIERRE MODAL DE EDITAR ACTIVIDAD PRINCIPAL --}}






            <a name="listaPaginas"></a>
            <h1>Lista de Actividades</h1>
            <hr>
            <br>
            <br>
            <br>


            @foreach ($actividades as $item)
                <div class="col-12 col-md-3">







                    <div class="card info-card customers-card animacion">
                        <img src=" {{ $item->imagen }} " class="card-img-top" alt="..." id="imgNice">


                        {{-- ELIMINAR ACTIVIDADA --}}
                        <form action="{{ route('actividadesSiquirres52.destroy', $item->id_config) }}" method="POST">
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
                                <h5 class="card-title"><a href="{{ $item->url }}" target="_blank"
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
                                    data-bs-target="#editarActividad{{ $item->id_config }}"
                                    class="btn btn-primary-personalizado mt-4">Editar</a>

                                {{-- CIERRE ABRIR MODAL EDITAR --}}

                            </div>
                        </div>
                    </div>

                </div>

                {{-- MODAL EDITAR ACTIVIDAD --}}

                <div class="modal fade" id="editarActividad{{ $item->id_config }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h5 class="modal-title colorTitulos">Editar Actividad</h5>
                                <button class="btn btn-sm btn-outline-danger" data-bs-dismiss="modal">X</button>
                            </div>

                            <div class="modal-body">
                                <form action="{{ route('actividadesSiquirres52.update', $item->id_config) }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="px-2 py-2">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <label for="">Título</label>
                                                <input type="hidden" name="id_pagina" value="{{ $item->id_pagina }}">
                                                <input type="text" class="form-control colorImput" name="tituloE"
                                                    value="{{ old('titulo', $item->titulo1) }}" maxlength="70" required>

                                                <div class="mt-4">
                                                    <label for="">URL</label>
                                                    <input type="text" class="form-control colorImput" name="urlE"
                                                        value="{{ old('url', $item->url) }}" maxlength="300" required>
                                                </div>

                                                <div class="mt-4 mb-3">
                                                    <label for="">Descripción</label>
                                                    <textarea class="form-control colorImput" name="descripcionE" rows="5" placeholder="Escribir la descripción">{{ old('descripcion', $item->descripcion) }}</textarea>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-12">
                                                <label for="editarInput" class="form-label">Actualizar imagen:</label>
                                                <input type="file" class="form-control colorImput" id="editarInput"
                                                    name="imagenE" accept="image/*">

                                                {{-- <div class="text-center mt-4">
                                                    @if ($item->imagen)
                                                        <img src="{{ asset($item->imagen) }}" alt="Vista previa"
                                                            class="rounded img-fluid custom-img"
                                                            style="width:300px; height: 200px; object-fit: cover;">
                                                    @else
                                                        <i class="bi bi-images"
                                                            style="font-size: 50px; color: #7a7777;"></i>
                                                    @endif
                                                </div> --}}

                                                <div class="text-center mt-4">
                                                    @if ($item->imagen)
                                                        <img src="{{ asset($item->imagen) }}" alt="Vista previa"
                                                            id="editarInputPreview" class="rounded img-fluid custom-img"
                                                            style="width:300px; height: 200px; object-fit: cover;">
                                                        <i id="editarInputIcon" class="bi bi-images"
                                                            style="font-size: 50px; color: #7a7777; display:none;"></i>
                                                    @else
                                                        <img src="#" alt="Vista previa" id="editarInputPreview"
                                                            class="rounded img-fluid custom-img"
                                                            style="width:300px; height: 200px; object-fit: cover; display:none;">
                                                        <i id="editarInputIcon" class="bi bi-images"
                                                            style="font-size: 50px; color: #7a7777;"></i>
                                                    @endif
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-primary">Actualizar</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                {{-- CIERRE MODAL EDITAR ACTIVIDAD --}}
            @endforeach



            {{-- MODAL REGISTRAR --}}

            <div class="modal fade" id="registrarPagina">
                <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title colorTitulos">
                                Registrar una nueva Actividad</h5>
                            <button class="btn btn-sm btn-outline-danger" data-bs-dismiss="modal">X</button>
                        </div>

                        <div class="modal-body">

                            <form action="{{ route('actividadesSiquirres52.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="px-2 py-2">
                                    <div class="row">

                                        <div class="col-lg-6 col-md-12">

                                            <div class="">
                                                <label for="">Título</label>

                                                <input type="hidden" name="id_pagina" value="7">
                                                <input type="text"class="form-control colorImput" name="titulo"
                                                    value="" placeholder="Escriba el título"maxlength="70" required>
                                            </div>

                                            <div class="mt-4">
                                                <label for="">URL</label>

                                                <input type="text"class="form-control colorImput" name="url"
                                                    value="" maxlength="300" placeholder="Escriba la URL del sitio"
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
                                                <label for="nuevoInput" class="form-label">Insertar imagen:</label>
                                                <input
                                                    type="file"class="form-control input-imagen colorImput form-control2"
                                                    id="registrarInput" maxlength="100"name="imagen" accept="image/*">

                                                <div class="text-center">

                                                    <img src="#" alt="Vista previa de la imagen"
                                                        id="registrarInput-preview"
                                                        class="mt-4 rounded imagen-preview img-fluid custom-img"
                                                        style="width:300px; height: 200px; object-fit: cover; display: none;">

                                                    <i id="registrarInput-icon" class="bi bi-images"
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

            {{-- CIERRE MODAL REGISTRAR --}}






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

@endsection
