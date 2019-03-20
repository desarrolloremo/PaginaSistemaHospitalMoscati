@extends('admin.layaout') 

 
@section('contenido')
    
<section class="content-header">
        <h1>
          Bolsa de trabajo
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Bolsa</a></li>
          <li class="active">Bolsa de trabajo</li>
        </ol>
      </section>
  
  <!-- Default box -->
        <div class="box">
          <div class="box-header with-border">
            <div class="box-tools pull-right">
                    <a href="{{route('admin.bolsadetrabajo.createtrabajo')}}" class="btn btn-s btn-primary pull-right"><i class="fa fa-plus"> Registrar nuevo medico</i></a>

            </div>
          </div>
          <div class="box-body">
                <table id="posts-table" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre Puesto</th>
                                <th>Resumen</th>
                                <th>Fecha</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->nombre}}</td>
                                <td>{{$post->excerpt}}</td>
                                <td>{{$post->published_at}}</td>
                                <td>
                                    <a href="{{route('admin.bolsadetrabajo.edittrabajo',$post)}}" class="btn btn-s btn-info"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="{{route('admin.bolsadetrabajo.delete',$post->id)}}" class="btn btn-s btn-danger"
                                        onclick="return confirm('Esta seguro que desea eliminar este registro');"><i class="fa fa-times"></i></a>
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