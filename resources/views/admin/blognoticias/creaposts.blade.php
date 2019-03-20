<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Crear articulo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('admin.blognoticias.store')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Titulo de la publicacion</label>
                        <input name="title" class="form-control" required placeholder="Ingrese el titulo del articulo" >
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button class="btn btn-primary">Guardar cambios</button>
            </div>
            </form>
        </div>
    </div>
</div>