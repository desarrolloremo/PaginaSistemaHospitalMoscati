@extends('admin.layaout') 
@section('contenido')
<section class="content-header">
    <h1>
        Crear nuevo paciente recibido

    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Buscar paciente</a></li>
        <li class="active">Crear nuevo paciente recibido</li>
    </ol>
</section>

<!-- Default box -->
<div class="box">
    <div class="box-header with-border">

        <div class="box-tools pull-right">
            <a href="{{route('admin.buscarpacientes.createpacientes')}}" class="btn btn-s btn-primary pull-right"><i class="fa fa-plus"> Registrar nuevo medico</i></a>
        </div>
    </div>
    <div class="box-body">
        <table id="posts-table" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Fecha de ingreso</th>
                    <th>Nombre </th>
                    <th>Apellidos</th>
                    <th>Caracteristicas</th>
                    <th>Unidad de ingreso</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td>{{Carbon\Carbon::parse($post->fechaingreso)}}</td>
                    <td>{{$post->nombre}}</td>
                    <td>{{$post->apellidoP." ".$post->apellidoM}}</td>
                    <td>{{$post->caracteristicas}}</td>
                    <td>{{$post->unidadingreso}}</td>
                    <td>
                        {{-- ,$post --}}
                        <a href="{{route('admin.buscarpacientes.editarpacientes',$post)}}" class="btn btn-s btn-info"><i class="fas fa-pencil-alt"></i></a>
                        <a href="{{route('admin.buscarpacientes.delete',$post->id)}}" class="btn btn-s btn-danger" onclick="return confirm('Esta seguro que desea eliminar este registro');"><i class="fa fa-times"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->
@endsection
 @push('styles')
<!-- DataTables -->
<link rel="stylesheet" href="/assetsLTE/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css"> 
@endpush @push('scripts')
<!-- DataTables -->
<script src="/assetsLTE/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/assetsLTE/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
    $(function () {
            $('#posts-table').DataTable({
              'paging'      : true,
              'lengthChange': false,
              'searching'   : false,
              'ordering'    : true,
              'info'        : true,
              'autoWidth'   : false
            })
          })
</script>


@endpush