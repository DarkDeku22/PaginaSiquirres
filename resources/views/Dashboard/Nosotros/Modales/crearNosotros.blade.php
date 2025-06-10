  {{-- MODAL CREAR NOSOTROS --}}


                        <div class="modal fade" id="registrarNosotros" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-xl modal-alto modal-dialog-scrollable"> {{-- MODAL CONFIGURADO A MI MANERA --}}
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h5 class="modal-title colorTitulos">Craer historia Nuestra</h5>
                                        <button class="btn btn-sm btn-outline-danger" data-bs-dismiss="modal">X</button>
                                    </div>

                                    <div class="modal-body">
                                        <form action="{{ route('nosotrosSiquirres52.store', $pagina[0]->id_pagina) }} "
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('post')

                                            <div class="px-2 py-2">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12">
                                                        <label for="">Título</label>
                                                        <input type="hidden" name="id_padre"
                                                            value="{{ $item->id_padre }}">
                                                        <input type="text" class="form-control colorImput"
                                                            name="tituloE" maxlength="70" required>



                                                        <div class="mt-4 mb-3">
                                                            <label for="">Descripción</label>
                                                            <textarea class="form-control colorImput" name="descripcionE" rows="5" placeholder="Escribir la descripción">
                                                        </textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-12">
                                                        <label for="nuevoInput" class="form-label">Insertar
                                                            imagen:</label>
                                                        <input
                                                            type="file"class="form-control input-imagen colorImput form-control2"
                                                            id="registrarInput" maxlength="100"name="imagen"
                                                            accept="image/*">

                                                        <div class="text-center">

                                                            <img src="#" alt="Vista previa de la imagen"
                                                                id="registrarInput-preview"
                                                                class="mt-4 rounded imagen-preview img-fluid custom-img"
                                                                style="width:300px; height: 200px; object-fit: cover; display: none;">

                                                            <i id="registrarInput-icon" class="bi bi-images"
                                                                style="font-size: 50px; color: #7a7777;"></i>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Cancelar</button>
                                                            <button type="submit"
                                                                class="btn btn-primary">Actualizar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        {{-- CIERRE MODAL CREAR NOSOTROS --}}