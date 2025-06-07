@extends('Dashboard/Plantilla/plantilla')

@section('title', 'Actividades - Recinto Siquirres')

@section('index')
    <main id="main" class="main">

        <div class="row pagetitle">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h1 class="mb-0">
                    <i class="bi bi-file-text-fill"></i> Actividades
                </h1>
               <a href="#" data-bs-toggle="modal" data-bs-target="#registrarPagina" class="btn btn-outline-success float-right">
                     +Registrar Actividad
               </a>
            </div>
            <hr>
            <br>

            @foreach ($actividades as $item)
                <div class="col-12 col-md-3">
                    <div class="card info-card customers-card animacion">
                        <img src=" {{ $item->imagen }} " class="card-img-top" alt="..." id="imgNice">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#EliminarPagina1"
                            class="btn btn-sm btn-danger position-absolute top-0 end-0 rounded-circle"
                            title="Eliminar Pagina">
                            <i class="bi bi-trash-fill"></i></a>
                        <div class="card-body">
                            <div class="text-center">
                                <h5 class="card-title"><a href="{{$item->url}}" target="_blank"
                                        title="Visitar">{{ $item->titulo1 }}</a>
                                </h5>
                                <div class="cartaInfo">
                                    <p class="card-text" style="font-size: 13px;">
                                        {{ $item->descripcion }}
                                    </p>
                                </div>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#editarPagina1"
                                    class="btn btn-primary-personalizado mt-4">Editar</a>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach



            {{-- MODAL REGISTRAR --}}

             <div class="modal fade" id="registrarPagina">
                                        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title colorTitulos">
                                                        Registrar una nueva Actividad</h5>
                                                    <button class="btn btn-sm btn-outline-danger"
                                                        data-bs-dismiss="modal">X</button>
                                                </div>

                                                <div class="modal-body">

                                                    <form action="{{route('administradorActividadesSiquirres52.store')}}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf

                                                        <div class="px-2 py-2">
                                                            <div class="row">

                                                                <div class="col-lg-6 col-md-12">

                                                                    <div class="">
                                                                        <label for="">Título</label>

                                                                        <input type="hidden" name="id_pagina" value="7">
                                                                        <input type="text"class="form-control colorImput" name="titulo" value=""
                                                                        placeholder="Escriba el título"maxlength="70" required>
                                                                    </div>

                                                                    <div class="mt-4">
                                                                        <label for="">URL</label>

                                                                        <input type="text"class="form-control colorImput" name="url" value="" 
                                                                        maxlength="300" placeholder="Escriba la URL del sitio" required>

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
                                                                        <input type="file"class="form-control input-imagen colorImput form-control2" id="registrarInput"
                                                                         maxlength="100"name="imagen" accept="image/*">

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

            {{-- CIERRE MODAL REGISTRAR --}}
        </div>

    </main>

@endsection
