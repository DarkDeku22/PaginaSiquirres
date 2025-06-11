@extends('Dashboard/Plantilla/plantilla')

@section('title', 'Actividades - Recinto Siquirres')

@section('index')
    <main id="main" class="main">

        <div class="row pagetitle">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h1 class="mb-0">
                    <i class="bi bi-file-text-fill"></i> Anuarios
                </h1>
               
            </div>
            <hr>
            <br>

              <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                        type="button" role="tab" aria-controls="nav-home" aria-selected="true">General</button>

                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                        type="button" role="tab" aria-controls="nav-profile"
                        aria-selected="false">Anuarios</button>
                </div>
            </nav>



             <div class="tab-content" id="nav-tabContent">
                {{-- PRIMER NAV --}}
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                     <div class="card info-card customers-card animacion">

                <div class="card-body">
                    <h5 class="card-title">{{ $anuarioGeneral[0]->titulo }}</h5>

                    <a href="#" data-bs-toggle="modal" data-bs-target="#editarAnuario{{ $anuarioGeneral[0]->id_pagina }}"
                        class="btn btn-sm btn-primary-personalizado position-absolute top-0 end-0 rounded-circle"
                        title="Editar información">
                        <i class="bi bi-pencil-square" style="color: white"></i></a>

                    <div class="d-flex align-items-center">

                        <div class="ps-3">

                            <div class="cartaDescripcion">

                                <p>{{ $anuarioGeneral[0]->descripcion }}</p>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
                </div>
                {{-- CIERRE PRIMER NAV --}}



                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                
                    <br>
               <div class="justify-content-between">
             
                <a href="#" data-bs-toggle="modal" data-bs-target="#registrarPagina"
                    class="btn btn-outline-success float-right">
                    +Registrar Generación
                </a>
                
                <a href="#" data-bs-toggle="modal" data-bs-target="#registrarPagina"
                    class="btn btn-outline-danger float-right">
                    -Eliminar Generación
                </a>
            </div>
<br>

            <!-- Nav tabs -->
<ul class="nav nav-tabs" id="myTab" role="tablist">
    @foreach($imagenesAgrupadas as $titulo => $imagenes)
        <li class="nav-item" role="presentation">
             
            <button class="nav-link @if($loop->first) active @endif" {{--El loop es de laravel y srive para ver cosas dentro del foreach y ente caso es para activar el tap--}}
                    id="{{ Str::slug($titulo) }}-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#{{ Str::slug($titulo) }}" {{--SON IDS VALIDOS PARA HTML--}}
                    type="button"
                    role="tab">
                {{ $titulo }}
            </button>
          
        </li>
    @endforeach
</ul>

<!-- Tab panes -->
<div class="tab-content mt-3">
    @foreach($imagenesAgrupadas as $titulo => $imagenes)
        <div class="tab-pane fade @if($loop->first) show active @endif"  
             id="{{ Str::slug($titulo) }}"
             role="tabpanel">
             
            <div class="row">
                @foreach($imagenes as $imagen)
                    <div class="col-md-4 mb-3">
                        <div class="card shadow-sm position-relative h-100">

                            {{-- Botón editar imagen (esquina superior izquierda) --}}
                            <a href="#" data-bs-toggle="modal" data-bs-target="#editarImagen{{ $imagen->id_imagen }}"
                               class="btn btn-sm btn-primary-personalizado position-absolute top-0 start-0 rounded-circle m-1"
                               title="Editar información">
                                <i class="bi bi-pencil-fill"></i>
                            </a>

                            {{-- Botón eliminar imagen (esquina superior derecha) --}}
                            <form action="{{route('anuSiquirres52.destroy',$imagen->id_imagen)}}" method="POST"
                                  style="position: absolute; top: 10px; right: 10px;" class="form-eliminar">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger rounded-circle" title="Eliminar Imagen">
        <i class="bi bi-trash-fill"></i>
    </button>
                            </form>

                            {{-- Imagen --}}
                            <img src="{{ $imagen->url }}" class="card-img-top" alt="Imagen {{ $imagen->id_imagen }}" style="height: 200px; object-fit: cover;">

                            {{-- Contenido del card --}}
                            <div class="card-body">
                                <h6 class="card-title text-primary">{{ $imagen->titulo }}</h6> {{-- Generación --}}
                                <p class="card-text text-muted">{{ $imagen->descripcion }}</p> {{-- Descripción --}}
                            </div>

                        </div>
                    </div>
                    {{-- MODAL EDITAR --}}
                    {{-- MODAL EDITAR IMAGEN --}}
<div class="modal fade" id="editarImagen{{ $imagen->id_imagen }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable modal-alto">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title colorTitulos">Editar Información de la Imagen</h5>
                <button class="btn btn-sm btn-outline-danger" data-bs-dismiss="modal">X</button>
            </div>

            <div class="modal-body">
                <form action="{{route('anuSiquirres52.update',$imagen->id_imagen)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="px-2 py-2">
                        <div class="row">
                            {{-- Columna izquierda: datos --}}
                            <div class="col-lg-6 col-md-12">
                                <div class="mb-3">
                                    <label for="titulo{{ $imagen->id_imagen }}" class="form-label">Título / Generación</label>
                                    <input type="text" class="form-control colorImput" id="titulo{{ $imagen->id_imagen }}"
                                           name="tituloE" value="{{ $imagen->titulo }}" required>
                                </div>

                                <input type="hidden" name="id_paginaE" value="{{$anuarioGeneral[0]->id_pagina}}">

                                <div class="mt-4 mb-3">
                                    <label for="descripcion{{ $imagen->id_imagen }}" class="form-label">Descripción</label>
                                    <textarea class="form-control colorImput" name="descripcionE" rows="5"
                                              id="descripcion{{ $imagen->id_imagen }}" required>{{ $imagen->descripcion }}</textarea>
                                </div>
                            </div>

                            {{-- Columna derecha: imagen --}}
                            <div class="col-lg-6 col-md-12">
                                                            <input name="urlE" type="file" class="form-control colorImput editarInput"
    data-id="{{ $imagen->url }}" accept="image/*">

<div class="text-center mt-4">
    @if ($imagen->url)
        <img src="{{ asset($imagen->url) }}"
            alt="Vista previa"
            class="rounded img-fluid custom-img editarInputPreview"
            data-id="{{$imagen->url }}"
            style="width:300px; height: 200px; object-fit: cover;">
        <i class="bi bi-images editarInputIcon"
            data-id="{{ $imagen->url }}"
            style="font-size: 50px; color: #7a7777; display:none;"></i>
    @else
        <img src="#" alt="Vista previa"
            class="rounded img-fluid custom-img editarInputPreview"
            data-id="{{ $imagen->url }}"
            style="width:300px; height: 200px; object-fit: cover; display:none;">
        <i class="bi bi-images editarInputIcon"
            data-id="{{ $imagen->url }}"
            style="font-size: 50px; color: #7a7777;"></i>
    @endif
</div>


                                                        </div>
                                                          <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Cancelar</button>
                                                            <button type="submit"
                                                                class="btn btn-primary">Actualizar</button>
                                                        </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
{{-- FIN MODAL EDITAR IMAGEN --}}

                    {{-- CIERRE MODAL EDITAR --}}
                @endforeach
            </div>
        </div>
    @endforeach
</div>
{{-- cierre vista anuarios --}}

{{-- MODAL CREAR GENERACIÓN --}}
<div class="modal fade" id="registrarPagina" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-alto modal-dialog-scrollable">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title colorTitulos">Registrar Generación</h5>
                <button class="btn btn-sm btn-outline-danger" data-bs-dismiss="modal">X</button>
            </div>

            <div class="modal-body">
                <form action="{{route('anuSiquirres52.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('post')

                    <div class="px-2 py-2">
                        <div class="row">
                            {{-- Columna izquierda (datos) --}}
                            <div class="col-lg-6 col-md-12">
                                <div class="mb-3">
                                    <label for="titulo" class="form-label">Generación</label>
                                    <select class="form-select colorImput" name="gene" id="titulo" required>
                                        <option value="">Seleccione una generación</option>
                                        @for ($fecha = 2017; $fecha <= 2035; $fecha++)
                                            <option value="Generación {{ $fecha }}">Generación {{ $fecha }}</option>
                                        @endfor
                                    </select>
                                </div>

                                
                                <div class="mt-4 mb-3">
                                    <label for="descripcion" class="form-label">Descripción</label>
                                    <textarea class="form-control colorImput" name="descripcionA" rows="5" placeholder="Escriba la descripción aquí..." required></textarea>
                                </div>
                            </div>

                            {{-- Columna derecha (imagen) --}}
                            <div class="col-lg-6 col-md-12">
                                <label for="imagen" class="form-label">Insertar imagen:</label>
                                <input type="file" class="form-control colorImput input-imagen form-control2"
                                       id="imagenInput" name="url" accept="image/*" onchange="previewGeneracion(event)" required>

                                <div class="text-center">
                                    <img src="#" alt="Vista previa de la imagen"
                                         id="imagenInput-preview"
                                         class="mt-4 rounded imagen-preview img-fluid custom-img"
                                         style="width:300px; height: 200px; object-fit: cover; display: none;">

                                    <i id="imagenInput-icon" class="bi bi-images"
                                       style="font-size: 50px; color: #7a7777;"></i>
                                </div>

                                <input type="hidden" name="id_pagina" value="{{$anuarioGeneral[0]->id_pagina}}">

                                <div class="modal-footer mt-4">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-success">Guardar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
{{-- CIERRE MODAL CREAR GENERACIÓN --}}

                </div>
             </div>

           





  


        </div>
    </main>
    <script>
document.addEventListener('DOMContentLoaded', function () {
    const inputs = document.querySelectorAll('.editarInput');

    inputs.forEach(input => {
        input.addEventListener('change', function () {
            const id = this.getAttribute('data-id');
            const [file] = this.files;
            const preview = document.querySelector(`.editarInputPreview[data-id="${id}"]`);
            const icon = document.querySelector(`.editarInputIcon[data-id="${id}"]`);

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
    });
});
</script>
@endsection