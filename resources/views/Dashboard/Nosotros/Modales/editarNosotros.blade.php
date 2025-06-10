 {{-- MODAL EDITAR NOSOTROS --}}


                            <div class="modal fade" id="editarNosotros{{ $item->id_pagina }}" tabindex="-1"
                                aria-hidden="true">
                                <div class="modal-dialog modal-xl modal-alto modal-dialog-scrollable"> {{-- MODAL CONFIGURADO A MI MANERA --}}
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h5 class="modal-title colorTitulos">Editar Actividad</h5>
                                            <button class="btn btn-sm btn-outline-danger" data-bs-dismiss="modal">X</button>
                                        </div>

                                        <div class="modal-body">
                                            <form action="{{ route('nosotrosSiquirres52.update', $item->id_pagina) }}"
                                                method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')

                                                <div class="px-2 py-2">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-12">
                                                            <label for="">Título</label>
                                                            <input type="hidden" name="id_pagina"
                                                                value="{{ $item->id_pagina }}">
                                                            <input type="text" class="form-control colorImput"
                                                                name="tituloE" value="{{ old('titulo', $item->titulo) }}"
                                                                maxlength="70" required>



                                                            <div class="mt-4 mb-3">
                                                                <label for="">Descripción</label>
                                                                <textarea class="form-control colorImput" name="descripcionE" rows="5" placeholder="Escribir la descripción">
                                                        {{ old('descripcion', $item->descripcion) }}</textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 col-md-12">
                                                            <label for="editarInput" class="form-label">Actualizar
                                                                imagen:</label>
                                                            <input type="file" class="form-control colorImput"
                                                                id="editarInput" name="imagenE" accept="image/*">

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
                                                                @if ($item->feacture)
                                                                    <img src="{{ asset($item->feacture) }}"
                                                                        alt="Vista previa" id="editarInputPreview"
                                                                        class="rounded img-fluid custom-img"
                                                                        style="width:300px; height: 200px; object-fit: cover;">
                                                                    <i id="editarInputIcon" class="bi bi-images"
                                                                        style="font-size: 50px; color: #7a7777; display:none;"></i>
                                                                @else
                                                                    <img src="#" alt="Vista previa"
                                                                        id="editarInputPreview"
                                                                        class="rounded img-fluid custom-img"
                                                                        style="width:300px; height: 200px; object-fit: cover; display:none;">
                                                                    <i id="editarInputIcon" class="bi bi-images"
                                                                        style="font-size: 50px; color: #7a7777;"></i>
                                                                @endif
                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Cancelar</button>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Registrar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            {{-- CIERRE MODAL EDITAR NOSOTROS --}}