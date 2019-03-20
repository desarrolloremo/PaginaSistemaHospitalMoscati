@extends('admin.layaout') 

@section('contenido')
<section class="content-header">
        <h1>
          Crear trabajo
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Bolsa</a></li>
          <li class="active">Crear trabajo</li>
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
                <form method="POST" action="{{ route('admin.bolsadetrabajo.store')}}">
                        {{csrf_field()}}
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nombre del puesto</label>
                                <input name="nombre" class="form-control" placeholder="Ingrese el titulo del articulo" required>
                            </div>
                            <div class="form-group">
                                <label>Breve descripcion</label>
                                <input name="excerpt" class="form-control" placeholder="Ingrese el titulo del articulo" required>
                            </div>
                            <div class="form-group">
                                <label>Detalles</label>
                                <textarea name="descripcion" id="editor" cols="30" rows="30"></textarea>
    
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