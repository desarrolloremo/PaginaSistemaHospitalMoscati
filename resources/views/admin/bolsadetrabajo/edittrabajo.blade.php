@extends('admin.layaout') 

@section('contenido')
<section class="content-header">
        <h1>
          Edita  trabajo
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Bolsa</a></li>
          <li class="active">Edita  trabajo</li>
        </ol>
      </section>
  
  <!-- Default box -->
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Ingrese los datos del trabajo</h3>
  
            <div class="box-tools pull-right">
              
            </div>
          </div>
          <div class="box-body">
                <form method="POST" action="{{ route('admin.bolsadetrabajo.update',$post)}}">
                        {{csrf_field()}} {{ method_field('PUT')}} 
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nombre del puesto</label>
                                <input name="nombre" value="{{old('nombre', $post->nombre)}}" class="form-control" placeholder="Ingrese el titulo del puesto" required>
                            </div>
                            <div class="form-group">
                                <label>Breve descripcion</label>
                                <input name="excerpt"  value="{{old('excerpt', $post->excerpt)}}"class="form-control" placeholder="Ingrese una breve descripción" required>
                            </div>
                            <div class="form-group">
                                <label>Detalles</label>
                                <textarea name="descripcion" id="editor" cols="50" rows="30">{{Request::old('descripcion', $post->descripcion)}}</textarea>
    
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