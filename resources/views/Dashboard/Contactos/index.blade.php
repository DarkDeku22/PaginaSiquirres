@extends('Dashboard/Plantilla/plantilla')

@section('title', 'Actividades - Recinto Siquirres')

@section('index')
    <main id="main" class="main">

        <div class="row pagetitle">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h1 class="mb-0">
                    <i class="bi bi-file-text-fill"></i> Actividades
                </h1>
               
            </div>
            <hr>
            <br>


            <div class="card info-card customers-card animacion">

                <div class="card-body">
                    <h5 class="card-title">{{ $contactoP[0]->titulo }}</h5>

                    <a href="#" data-bs-toggle="modal" data-bs-target="#editarContacto{{ $contactoP[0]->id_pagina }}"
                        class="btn btn-sm btn-primary-personalizado position-absolute top-0 end-0 rounded-circle"
                        title="Editar información">
                        <i class="bi bi-pencil-square" style="color: white"></i></a>

                    <div class="d-flex align-items-center">

                        <div class="ps-3">

                            <div class="cartaDescripcion">

                                <p>{{ $contactoP[0]->descripcion }}</p>

                            </div>

                        </div>
                    </div>

                </div>
            </div>

              <!-- MODAL DE EDITAR ACTIVIDAD PRINCIPAL -->
            <div class="modal fade" id="editarContacto{{ $contactoP[0]->id_pagina }}">
                <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title colorTitulos">
                                Configurar Datos del encabezado, sección de <strong>Actividades </strong></h5>
                            <button class="btn btn-sm btn-outline-danger" data-bs-dismiss="modal">X</button>
                        </div>
                        <div class="modal-body">

                            <form action="{{route('contactosSiquirres52.update',$contactoP[0]->id_pagina)}}" method="POST">
                                @method('put')
                                @csrf

                                <div class="px-3 py-2">

                                    <div>
                                        <label for="">Título</label>
                                    </div>
                                    <div class="">

                                        <input type="hidden" name="id_padre" value="{{ $contactoP[0]->id_pagina }}">

                                        <input type="text" class="form-control colorImput" name="tituloC"
                                            maxlength="100" value="{{ $contactoP[0]->titulo }}" placeholder="Escriba el título"
                                            required>
                                    </div>
                                    <div class="mt-3">
                                        <label for="">Contenido</label>
                                    </div>
                                    <div class="mb-4">
                                        
                                        <div>
                                            <textarea class="form-control colorImput" id="" rows="10" name="desC"
                                                placeholder="Escriba la información">{{old('descripcion',$contactoP[0]->descripcion)}}</textarea>
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

          
        
            <div class="d-flex justify-content-between align-items-center mb-3">
      {{-- <a name="listaPaginas"></a> --}}
            <h1>Lista de Contactos</h1>

     <a href="#" data-bs-toggle="modal" data-bs-target="#registrarContacto"
                    class="btn btn-outline-success float-right">
                    +Registrar Contacto
                </a> 
</div>
    <hr>
    <br>


   
<div class="row">
 
  @foreach ($contactos as $tel)
    <div class="col-lg-4 col-md-6 mb-4">
        
      <div class="card shadow-sm border-0 h-100 position-relative p-3">

        <!-- 🗑️ Botón de eliminar en esquina superior derecha -->
        <form action="{{route('contactosSiquirres52.destroy',$tel->id_contacto)}}" method="POST" style="position: absolute; top: 10px; right: 10px;">
          @csrf
          @method('DELETE')
          <button type="submit" data-bs-toggle="modal" data-bs-target="#EliminarPagina1"
                                class="btn btn-sm btn-danger position-absolute top-0 end-0 rounded-circle"
                                title="Eliminar Pagina">
                                <i class="bi bi-trash-fill"></i></button>
        </form>

        <div class="d-flex align-items-center mb-3">
          <div class="me-2">
            <i class="fa fa-address-book fa-2x" style="color: #5cbcf6;"></i>
          </div>
        </div>

        <h5 class="fw-bold" style="border-bottom: 2px solid #5cbcf6; padding-bottom: 5px;">{{ $tel->titulo }}</h5>
        <p class="mb-1">{{ $tel->nombre }}</p>
        <ul class="list-unstyled small mb-3">
          <li><strong>Teléfono:</strong> {{ $tel->numero }}</li>
          <li><strong>Correo:</strong> {{ $tel->correo }}</li>
        </ul>

        <!-- ✏️ Botón de editar al fondo del card -->
         <a href="#" data-bs-toggle="modal"
                                    data-bs-target="#editarContacto{{$tel->id_contacto}}"
                                    class="btn btn-primary-personalizado mt-4">Editar</a>
      </div>
    </div>

    <!-- MODAL EDITAR CONTACTO -->
<div class="modal fade" id="editarContacto{{$tel->id_contacto}}" tabindex="-1" aria-labelledby="registrarContactoLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="registrarContactoLabel">Actualizar Contacto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>

      <form action="{{ route('editarCon', $tel->id_contacto) }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')


        <div class="modal-body">
          <div class="card shadow-sm border-0 h-100 p-3">

            <div class="d-flex align-items-center mb-3">
              <div class="me-2">
                <i class="fa fa-address-book fa-2x" style="color: #5cbcf6;"></i>
              </div>
            </div>

            <div class="mb-3">
              <label for="titulo" class="form-label">Título</label>
              <input type="text" class="form-control" name="tituloC" id="titulo" value="{{$tel->titulo}}" required>
            </div>

            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" name="nombreC" id="nombre" value="{{$tel->nombre}}" required>
            </div>

            

            <div class="mb-3">
              <label for="numero" class="form-label">Teléfono</label>
              <input type="text" class="form-control" name="numeroC" id="numero" value="{{$tel->numero}}" required>
            </div>

            <div class="mb-3">
              <label for="correo" class="form-label">Correo</label>
              <input type="email" class="form-control" name="correoC" id="correo" value="{{$tel->correo}}" required>
            </div>

          </div>
        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Guardar</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        </div>
      </form>
    </div>
  </div>
</div>

{{-- CIERRRE MODAL EDITAR CONTACTO --}}
  @endforeach
  

<!-- Modal para Registrar Contacto -->
<div class="modal fade" id="registrarContacto" tabindex="-1" aria-labelledby="registrarContactoLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="registrarContactoLabel">Registrar Contacto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>

      <form action="{{ route('contactosSiquirres52.store') }}" method="POST">
        @csrf
        <div class="modal-body">
          <div class="card shadow-sm border-0 h-100 p-3">

            <div class="d-flex align-items-center mb-3">
              <div class="me-2">
                <i class="fa fa-address-book fa-2x" style="color: #5cbcf6;"></i>
              </div>
            </div>

            <div class="mb-3">
              <label for="titulo" class="form-label">Título</label>
              <input type="text" class="form-control" name="titulo" id="titulo" required>
            </div>

            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" name="nombre" id="nombre" required>
            </div>

            

            <div class="mb-3">
              <label for="numero" class="form-label">Teléfono</label>
              <input type="text" class="form-control" name="numero" id="numero" required>
            </div>

            <div class="mb-3">
              <label for="correo" class="form-label">Correo</label>
              <input type="email" class="form-control" name="correo" id="correo" required>
            </div>

          </div>
        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Guardar</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        </div>
      </form>
    </div>
  </div>
</div>

{{-- CIERRRE MODAL CREAR CONTACTO --}}
</div>







            </div>
    </main>
@endsection