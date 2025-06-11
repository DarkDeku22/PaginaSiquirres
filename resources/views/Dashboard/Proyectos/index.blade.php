@extends('Dashboard/Plantilla/plantilla')

@section('title', 'Proyectos - Recinto Siquirres')

@section('index')
    <main id="main" class="main">

        <div class="row pagetitle">

             <div class="d-flex justify-content-between align-items-center mb-3">
                <h1 class="mb-0">
                   <i class="bi bi-bar-chart-fill"></i> Proyectos
                </h1>
                <a href="#" data-bs-toggle="modal" data-bs-target="#registrarPagina"
                    class="btn btn-outline-success float-right">
                    +Registrar Proyecto
                </a>
            </div>
            <hr><br>
            {{-- VISTA DE LOS PROYECTOS --}}
             @foreach ($proyectos as $proyec)
                <div class="col-12 col-md-3">
                    <div class="card info-card customers-card animacion">
                        <img src=" {{ $proyec->imagen }} " class="card-img-top" alt="..." id="imgNice">


                        {{-- ELIMINAR ACTIVIDADA --}}
                        <form action="{{ route('proyectosSiquirres52.destroy', $proyec->id_config) }}" method="POST">
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
                                <h5 class="card-title"><a href="{{ $proyec->url }}" target="_blank"
                                        title="Visitar">{{ $proyec->titulo1 }}</a>
                                </h5>
                                <div class="cartaInfo">
                                    <p class="card-text" style="font-size: 13px;">
                                        {{ $proyec->descripcion }}
                                    </p>
                                </div>
                            </div>
                            <div class="d-grid gap-2">
                                {{-- ABRIR MODAL EDITAR --}}

                                <a href="#" data-bs-toggle="modal"
                                    data-bs-target="#editarProyecto{{ $proyec->id_config }}"
                                    class="btn btn-primary-personalizado mt-4">Editar</a>

                                {{-- CIERRE ABRIR MODAL EDITAR --}}

                            </div>
                        </div>
                    </div>

                </div>

               {{-- MODAL EDITAR --}}
             <div class="modal fade" id="editarProyecto{{ $proyec->id_config }}">
                <div class="modal-dialog modal-xl modal-alto modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title colorTitulos">
                                Actualizar <strong>Proyecto</strong></h5>
                            <button class="btn btn-sm btn-outline-danger" data-bs-dismiss="modal">X</button>
                        </div>

                        <div class="modal-body">

                            <form action="{{route('proyectosSiquirres52.update',$proyec->id_config)}}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')

                                <div class="px-2 py-2">
                                    <div class="row">

                                        <div class="col-lg-6 col-md-12">

                                            <div class="">
                                                <label for="">Título</label>

                                                <input type="hidden" name="id_pagina" value="7">
                                                <input type="text"class="form-control colorImput" name="tituloP" value="{{$proyec->titulo1}}"
                                                    value="" placeholder="Escriba el título"maxlength="70" required>
                                            </div>

                                            

                                            <div class="mt-4 mb-3">
                                                <label for="">Descripción</label>

                                                <textarea class="form-control colorImput" id="" placeholder="Escribir la descripción" rows="5"
                                                    name="descripcionP">  {{ old('descripcion', $proyec->descripcion) }}</textarea>
                                            </div>


                                        </div>

                                        <div class="col-lg-6 col-md-12">
                                                            <input name="imagenP" type="file" class="form-control colorImput editarInput"
    data-id="{{ $proyec->id_config }}" accept="image/*">

<div class="text-center mt-4">
    @if ($proyec->imagen)
        <img src="{{ asset($proyec->imagen) }}"
            alt="Vista previa"
            class="rounded img-fluid custom-img editarInputPreview"
            data-id="{{ $proyec->id_config }}"
            style="width:300px; height: 200px; object-fit: cover;">
        <i class="bi bi-images editarInputIcon"
            data-id="{{ $proyec->id_config }}"
            style="font-size: 50px; color: #7a7777; display:none;"></i>
    @else
        <img src="#" alt="Vista previa"
            class="rounded img-fluid custom-img editarInputPreview"
            data-id="{{ $proyec->id_config }}"
            style="width:300px; height: 200px; object-fit: cover; display:none;">
        <i class="bi bi-images editarInputIcon"
            data-id="{{ $proyec->id_config }}"
            style="font-size: 50px; color: #7a7777;"></i>
    @endif
</div>


                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Cancelar</button>
                                                            <button type="submit"
                                                                class="btn btn-primary">Registrar</button>
                                                        </div>

                                    </div>

                                </div>

                                

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- CIERRE MODAL EDITAR --}}
                @endforeach





            {{-- CIERRE VISTA DE LOS PROYECTOS --}}


            {{-- MODAL CREAR --}}
             <div class="modal fade" id="registrarPagina">
                <div class="modal-dialog modal-xl modal-alto modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title colorTitulos">
                                Registrar un nuevo <strong>Proyecto</strong></h5>
                            <button class="btn btn-sm btn-outline-danger" data-bs-dismiss="modal">X</button>
                        </div>

                        <div class="modal-body">

                            <form action="{{route('proyectosSiquirres52.store')}}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="px-2 py-2">
                                    <div class="row">

                                        <div class="col-lg-6 col-md-12">

                                            <div class="">
                                                <label for="">Título</label>

                                                <input type="hidden" name="id_pagina" value="7">
                                                <input type="text"class="form-control colorImput" name="tituloP"
                                                    value="" placeholder="Escriba el título"maxlength="70" required>
                                            </div>

                                            

                                            <div class="mt-4 mb-3">
                                                <label for="">Descripción</label>

                                                <textarea class="form-control colorImput" id="" placeholder="Escribir la descripción" rows="5"
                                                    name="descripcionP"></textarea>
                                            </div>


                                        </div>

                                        <div class="col-lg-6 col-md-12">

                                            <div class="">
                                                <label for="nuevoInput" class="form-label">Insertar imagen:</label>
                                                <input
                                                    type="file"class="form-control input-imagen colorImput form-control2"
                                                    id="registrarInput" maxlength="100"name="imagenP" accept="image/*">

                                                <div class="text-center">

                                                    <img src="#" alt="Vista previa de la imagen"
                                                        id="registrarInput-preview"
                                                        class="mt-4 rounded imagen-preview img-fluid custom-img"
                                                        style="width:300px; height: 200px; object-fit: cover; display: none;">

                                                    <i id="registrarInput-icon" class="bi bi-images"
                                                        style="font-size: 50px; color: #7a7777;"></i>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-success">Registrar</button>
                                </div>
                                        </div>

                                    </div>

                                </div>

                                

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- CIERRE MODAL CREAR --}}
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