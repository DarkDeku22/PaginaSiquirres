{{-- MODAL EDITAR ADMINISTRATIVO --}}
                <div class="modal fade" id="editarAdmin{{ $admin->id_administrativo }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-scrollable"> {{--MODAL CONFIGURADO A MI MANERA--}}
                        <div class="modal-content">

                            <div class="modal-header">
                                <h5 class="modal-title colorTitulos">Registrar Administrativo</h5>
                                <button class="btn btn-sm btn-outline-danger" data-bs-dismiss="modal">X</button>
                               
                            </div>

                            <div class="modal-body">
                                <form action="{{route('editarAdmin',$admin->id_administrativo)}}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')

                                    <div class="px-2 py-2">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                
                                                <label for="">Nombre</label>
                                                <input type="text" class="form-control colorImput" name="nombreA" value="{{$admin->nombre}}"
                                                     maxlength="70" required> 

                                                <div class="mt-4 mb-3">
                                                     <label for="">Cargo</label>
                                                <input type="text" class="form-control colorImput" name="puestoA" value="{{$admin->puesto}}"
                                                     maxlength="70" required>
                                                </div>

                                                

                                                <div class="mt-4 mb-3">
                                                    <label for="">Descripción</label>
                                                    <textarea class="form-control colorImput" name="descripcionA" rows="5" placeholder="Escribir la descripción" >
                                                       {{ old('descripcion', $admin->descripcion) }}  </textarea>
                                                </div>
                                            </div>

                                           <div class="col-lg-6 col-md-12">
                                                <label for="nuevoInput" class="form-label">Insertar imagen:</label>
                                                <input
                                                    type="file"class="form-control input-imagen colorImput form-control2"
                                                    id="editarInput2" maxlength="100"name="imagenA" accept="image/*">

                                                  <div class="text-center mt-4">
                                                                @if ($admin->imagen)
                                                                    <img src="{{ asset($admin->imagen) }}"
                                                                        alt="Vista previa" id="editarInputPreview2"
                                                                        class="rounded img-fluid custom-img"
                                                                        style="width:300px; height: 200px; object-fit: cover;">
                                                                    <i id="editarInputIcon" class="bi bi-images"
                                                                        style="font-size: 50px; color: #7a7777; display:none;"></i>
                                                                @else
                                                                    <img src="#" alt="Vista previa"
                                                                        id="editarInputPreview2"
                                                                        class="rounded img-fluid custom-img"
                                                                        style="width:300px; height: 200px; object-fit: cover; display:none;">
                                                                    <i id="editarInputIcon" class="bi bi-images"
                                                                        style="font-size: 50px; color: #7a7777;"></i>
                                                                @endif
                                                            </div>
                                                <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-primary">Actualizar</button>
                                    </div>
                                            </div>
                                        </div>
                                    </div>

                                    
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                {{-- CIERRE MODAL EDITAR ADMINISTRATIVO --}}