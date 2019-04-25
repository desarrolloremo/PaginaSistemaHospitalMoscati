@extends('admin.layaout') 
@section('contenido')

<div class="box">
    <div class="box-header with-border">
    

        <div class="box-tools pull-right">

        </div>
    </div>
    <div class="box-body">

        <form method="POST" action="{{ route('admin.buscarpacientes.store')}}">
            {{csrf_field()}}
            <div class="card-body">
                <div class="alert alert-info" role="alert">
                    Se muestrara el pacientes con hospitalizaciones vigentes a la fecha cuando se publique.
                </div>
                <div class="form-group">
                    <label>Nombre de paciente</label>
                    <input name="nombre" class="form-control" placeholder="Ingrese el nombre" required>
                </div>
                <div class="form-group">
                    <label>Apellido Paterno</label>
                    <input name="apellidoP" class="form-control" placeholder="Ingrese la apellido paterno" required>
                </div>
                <div class="form-group">
                    <label>Apellido Materno</label>
                    <input name="apellidoM" class="form-control" placeholder="Ingrese la apellido materno" required>
                </div>
                <div class="form-group">
                    <label>Sexo</label>

                    <select name="sexo" class="form-control" required>
                                <option value="Femenimo">Femenimo</option>
                                <option value="Masculino">Masculino</option>
                               
                              </select>

                </div>

                <div class="form-group">
                    <label>Caracteristicas</label>
                    <input name="caracteristicas" class="form-control" placeholder="Ingrese algunas señas o vesteminentas del paciente" required>
                </div>
                <div class="form-group">
                    <label>Unidad de ingreso</label>
                    <select name="unidadingreso" class="form-control" placeholder="Ingrese el tipo de evento" required>
                                            <option value="Urgencias">Urgencias</option>
                                            <option value="Ciruguia">Ciruguia</option>
                                           
                                          </select>
                </div>
                <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-save"> Guardar Paciente</i></button>
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