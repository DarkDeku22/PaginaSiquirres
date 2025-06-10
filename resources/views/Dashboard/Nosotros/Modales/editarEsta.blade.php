{{-- MODAL CREAR ADMINISTRATIVO PEQUEÑO --}}
<div class="modal fade" id="editarEsta{{ $esta->id_config }}" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered"> {{-- modal pequeño y centrado --}}
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title colorTitulos">Editar Estadística</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>

      <form action="{{route('crearEsta')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('post')

        <div class="modal-body">
          <div class="mb-3">
            <label for="nombreA" class="form-label">Titulo</label>
            <input type="text" class="form-control colorImput" id="nombreA" name="titulo1" value="{{$esta->titulo1}}" maxlength="70" required>
            <input type="hidden" class="form-control colorImput" value="{{$estadisticas[0]->id_pagina}}" name="id_pagina" >
          </div>

          <div class="mb-3">
            <label for="puestoA" class="form-label">Valor</label>
            <input type="text" class="form-control colorImput" id="puestoA" name="descripcion" value="{{$esta->descripcion}}" maxlength="70" required>
          </div>
          
        
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
      </form>

    </div>
  </div>
</div>


