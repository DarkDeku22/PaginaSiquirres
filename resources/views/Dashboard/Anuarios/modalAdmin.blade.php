  <!-- MODAL DE EDITAR ACTIVIDAD PRINCIPAL -->
            <div class="modal fade" id="editarAnuario{{ $anuarioGeneral[0]->id_pagina }}">
                <div class="modal-dialog modal-dialog-centered modal-None modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title colorTitulos">
                                Configurar Datos del encabezado, sección de <strong>{{ $anuarioGeneral[0]->titulo }} </strong></h5>
                            <button class="btn btn-sm btn-outline-danger" data-bs-dismiss="modal">X</button>
                        </div>
                        <div class="modal-body">

                            <form action="{{ route('nosotrosPrincipal', $anuarioGeneral[0]->id_pagina) }}" method="POST">
                                @method('put')
                                @csrf

                                <div class="px-3 py-2">

                                    <div>
                                        <label for="">Título</label>
                                    </div>
                                    <div class="">

                                        <input type="hidden" name="id_padre" value="{{ $anuarioGeneral[0]->id_pagina }}">

                                        <input type="text" class="form-control colorImput" name="tituActividad"
                                            maxlength="100" value="{{ $anuarioGeneral[0]->titulo }}" placeholder="Escriba el título"
                                            required>
                                    </div>
                                    <div class="mt-3">
                                        <label for="">Contenido</label>
                                    </div>
                                    <div class="mb-4">
                                        <div>
                                            <textarea class="form-control colorImput" id="" rows="10" name="tituDes"
                                                placeholder="Escriba la información">{{ $anuarioGeneral[0]->descripcion }}</textarea>
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