<div class="modal fade" id="registrarPagina">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title colorTitulos">Registrar nuevo slide</h5>
                <button class="btn btn-sm btn-outline-danger" data-bs-dismiss="modal">X</button>
            </div>

            <div class="modal-body">
                <form action="{{ route('crearSlide') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('post')

                    <div class="px-2 py-2">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div>
                                    <label for="titulo">Título</label>
                                    <input type="text" class="form-control colorImput" name="titulo"
                                           placeholder="Escriba el título" maxlength="50" required>
                                </div>

                                <div class="mt-3">
                                    <label for="url">URL</label>
                                    <input type="text" class="form-control colorImput" name="url"
                                           placeholder="Escriba la URL del sitio" maxlength="300" required>
                                </div>

                                <div class="mt-3">
                                    <label for="btnTitulo">Botón</label>
                                    <input type="text" class="form-control colorImput" name="btnTitulo"
                                           placeholder="Título del botón" maxlength="50" required>
                                </div>

                                <div class="mt-3 mb-3">
                                    <label for="subtitulo">Descripción</label>
                                    <textarea class="form-control colorImput" name="subtitulo"
                                              placeholder="Escribir la descripción" rows="4" maxlength="300"></textarea>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div>
                                    <label for="nueva_img" class="form-label">Insertar imagen:</label>
                                    <input class="form-control colorImput form-control2 input-imagen"
                                           type="file" name="nueva_img" accept="image/*"
                                           id="registrarSlideInput" required>

                                    <!-- Vista previa -->
                                    <div class="text-center mt-3">
                                        <img id="previewImagen" class="rounded img-fluid d-none"
                                             alt="Vista previa">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-success">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Script para vista previa -->
<script>
document.getElementById('registrarSlideInput').addEventListener('change', function(event) {
    const file = event.target.files[0];
    const preview = document.getElementById('previewImagen');
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.classList.remove('d-none');
        }
        reader.readAsDataURL(file);
    } else {
        preview.src = '';
        preview.classList.add('d-none');
    }
});
</script>