@extends('admin.layaout') 
@section('contenido')
<section class="content-header">
    <h1>
        Actualizar evento
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Evento</a></li>
        <li class="active">Actualizar evento</li>
    </ol>
</section>

<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Ingrese los datos del proximo evento</h3>
        <div class="box-tools pull-right">
        </div>
    </div>
    <div class="box-body">
        <form method="POST" action="{{ route('admin.eventos.store')}}">
            {{csrf_field()}}
            <div class="col-sm-4">
                <div class="card-body">
                    <div class="form-group">
                        <label>Nombre del evento</label>
                        <input name="nombre"  value="{{old('nombre', $post->nombre)}}" class="form-control" placeholder="Ingrese el titulo del evento" required>
                    </div>
                    <div class="form-group">
                        <label>Tipo evento</label>
                        <select name="tipoevento"  value="{{old('tipoevento', $post->tipoevento)}}" class="form-control" placeholder="Ingrese el tipo de evento" required>
                                <option value="Público">Público</option>
                                <option value="Privado">Privado</option>
                               
                              </select>
                      
                    </div>
                    <div class="form-group">
                        <label>Duracion del evento</label>
                        <input name="duracion"  value="{{old('duracion', $post->duracion)}}" class="form-control" placeholder="Ingrese la duracion dele evento" required>
                    </div>
                    <div class="form-group">
                        <label>Direccion del evento</label>
                        <input name="lugar"  value="{{old('lugar', $post->lugar)}}"  class="form-control" placeholder="Ingrese la direccion del evento" value="Boulevard, Av. de las Ciencias 2058, Juriquilla, Qro."
                            required>
                    </div>
                    <div class="form-group">
                        <label>Fecha de inicio del evento</label>
                        <div class="input-group date">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input name="fechaevento" value="{{old('fechaevento', $post->fechaevento)}}"  type="text" class="form-control pull-right" id="datepicker">
                        </div>
                    </div>

                </div>

            </div>

            <div class="col-sm-8">

                <div class="form-group">
                    <label>Detalles</label>
                    <textarea name="body" id="editor">{{Request::old('body', $post->body)}}</textarea>

                </div>
                <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-save"> Guardar Trabajo</i></button>
            </div>
        </form>
    </div>
    <!-- /.box-body -->

</div>
<!-- /.box -->
@endsection
 @push('styles')
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="../../assetsLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"> 
@endpush @push('scripts')
<!-- bootstrap datepicker -->
<script src="../../assetsLTE/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdn.ckeditor.com/4.11.2/standard/ckeditor.js"></script>
<script>
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })
    CKEDITOR.replace( 'editor' );

</script>
@endpush