@extends('admin.layaout') 
 
@section('contenido')

<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Ingresa los datos del doctor</h3>

          <div class="box-tools pull-right">
            
          </div>
        </div>
        <div class="box-body">
                <form method="POST" action="{{ route('admin.directoriomedico.update',$post)}}">
                        {{csrf_field()}} {{ method_field('PUT')}} 
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nombre de doctor</label>
                                <input name="nombre"  value="{{old('nombre', $post->nombre)}}" class="form-control" placeholder="Ingrese el titulo del articulo" required>
                            </div>
                            <div class="form-group">
                                <label>Especialidad</label>
                                <input name="especialidad" value="{{old('especialidad', $post->especialidad)}}" class="form-control" placeholder="Ingrese el titulo del articulo" required>
                            </div>
                            <div class="form-group">
                                <label>Subespecialidad</label>
                                <input name="subespecialidad" value="{{old('subespecialidad', $post->subespecialidad)}}" class="form-control" placeholder="Ingrese el titulo del articulo" required>
                            </div>
                            <div class="form-group">
                                <label>Telefono</label>
                                <input type="number"  name="telefono" value="{{old('telefono', $post->telefono)}}" class="form-control"  placeholder="Ingrese el titulo del articulo" > 
                            </div>
                            <div class="form-group">
                                <label>Consultorio</label>
                                <input type="number" name="consultorio" value="{{old('consultorio', $post->consultorio)}}" class="form-control" placeholder="Ingrese el titulo del articulo" >
                            </div>
                            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-save"> Guardar Doctor</i></button>
                        </div>
                    </form>
        </div>
        <!-- /.box-body -->
        
        
      </div>




    </div>
@endsection
 @push('styles')
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="../../assetsLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"> 
@endpush @push('scripts')
    <!-- bootstrap datepicker -->
    <script src="../../assetsLTE/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.11.2/standard/ckeditor.js"></script>
    
@endpush