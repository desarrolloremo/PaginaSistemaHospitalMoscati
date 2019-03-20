@extends('admin.layaout') 
@section('contenido')
<section class="content-header">
    <h1>
        Lista de eventos
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Eventos</a></li>
        <li class="active">Lista de eventos</li>
    </ol>
</section>

<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <br>
        <div class="box-tools pull-right">
            <a href="{{route('admin.eventos.creareventos')}}" class="btn btn-s btn-primary pull-right"><i class="fa fa-plus"> Crear un nuevo evento</i></a>

        </div>
    </div>

    <table id="posts-table" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Tipo de evento</th>
                <th>Duracion evento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td>{{$post->nombre}}</td>
                <td>{{$post->tipoevento}}</td>
                <td>{{$post->duracion}}</td>
                <td>
                    <a href="{{route('admin.eventos.editareventos',$post)}}" class="btn btn-s btn-info"><i class="fa fa-pencil-alt"></i></a>
                    <a href="{{route('admin.eventos.delete',$post->id)}}" class="btn btn-s btn-danger" onclick="return confirm('Esta seguro que desea eliminar este registro');"><i class="fa fa-times"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Detalles</th>
                <th>Duracion evento</th>
                <th>Acciones</th>
            </tr>
        </tfoot>
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