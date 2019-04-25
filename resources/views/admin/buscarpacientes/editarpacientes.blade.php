@extends('admin.layaout') 
@section('contenido')
<section class="content-header">
    <h1>
        Edita paciente
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Pacientes</a></li>
        <li class="active">Edita paciente</li>
    </ol>
</section>

<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <div class="box-tools pull-right">
        </div>
    </div>
    <div class="box-body">
        <form method="POST" action="{{ route('admin.buscarpacientes.update',$post)}}">
            {{csrf_field()}} {{ method_field('PUT')}}
            <div class="card-body">
                <div class="alert alert-info" role="alert">
                    Se muestrara el pacientes con hospitalizaciones vigentes a la fecha cuando se publique.
                </div>
                <div class="form-group">
                    <label>Nombre de paciente</label>
                    <input name="nombre" value="{{old('nombre', $post->nombre)}}" class="form-control" placeholder="Ingrese el nombre">
                </div>
                <div class="form-group">
                    <label>Apellido Paterno</label>
                    <input name="apellidoP" value="{{old('apellidoP', $post->apellidoP)}}" class="form-control" placeholder="Ingrese la apellido paterno">
                </div>
                <div class="form-group">
                    <label>Apellido Materno</label>
                    <input name="apellidoM" value="{{old('apellidoM', $post->apellidoM)}}" class="form-control" placeholder="Ingrese la apellido materno">
                </div>
                <div class="form-group">
                    <label>Sexo</label>

                    <select name="sexo" class="form-control">
                            <option value="Femenimo" {{ old('sexo', $post->sexo) == 'Femenimo' ? 'selected' : '' }}>Femenimo </option>
                            <option value="Masculino" {{ old('sexo', $post->sexo) == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                                                    
                    </select>

                </div>
                <div class="form-group">
                    <label>Caracteristicas</label>
                    <input name="caracteristicas" value="{{old('caracteristicas', $post->caracteristicas)}}" class="form-control" placeholder="Ingrese algunas señas o vesteminentas del paciente">
                </div>
                <div class="form-group">
                    <label>Unidad de ingreso</label>
                    <select name="unidadingreso" class="form-control" placeholder="Ingrese el tipo de evento" required>
                            <option value="Urgencias" {{ old('sexo', $post->unidadingreso) == 'Urgencias' ? 'selected' : '' }}>Urgencias </option>
                            <option value="Ciruguia" {{ old('sexo', $post->unidadingreso) == 'Ciruguia' ? 'selected' : '' }}>Ciruguia </option>
                     
                     </select>
                </div>
                <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-save"> Guardar Paciente</i></button>
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