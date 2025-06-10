  {{-- MODAL CREAR ADMINISTRATIVO --}}


                <div class="modal fade" id="registrarAdmin" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-scrollable"> {{--MODAL CONFIGURADO A MI MANERA--}}
                        <div class="modal-content">

                            <div class="modal-header">
                                <h5 class="modal-title colorTitulos">Registrar Administrativo</h5>
                                <button class="btn btn-sm btn-outline-danger" data-bs-dismiss="modal">X</button>
                            </div>

                            <div class="modal-body">
                                <form action="{{route('crearAdmin')}}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('post')

                                    <div class="px-2 py-2">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                
                                                <label for="">Nombre</label>
                                                <input type="text" class="form-control colorImput" name="nombreA"
                                                     maxlength="70" required> 

                                                <div class="mt-4 mb-3">
                                                     <label for="">Cargo</label>
                                                <input type="text" class="form-control colorImput" name="puestoA"
                                                     maxlength="70" required>
                                                </div>

                                                

                                                <div class="mt-4 mb-3">
                                                    <label for="">Descripción</label>
                                                    <textarea class="form-control colorImput" name="descripcionA" rows="5" placeholder="Escribir la descripción">
                                                        </textarea>
                                                </div>
                                            </div>

                                           <div class="col-lg-6 col-md-12">
                                                <label for="nuevoInput" class="form-label">Insertar imagen:</label>
                                                <input
                                                    type="file"class="form-control input-imagen colorImput form-control2"
                                                    id="registrarInput" maxlength="100"name="imagenA" accept="image/*">

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
                                        <button type="submit" class="btn btn-primary">Registrar</button>
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
                {{-- CIERRE MODAL EDITAR NOSOTROS --}}