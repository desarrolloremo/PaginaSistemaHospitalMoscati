@extends('admin.layaout') 
@section('contenido')
<section class="content-header">
    <h1>
        Lista de publicaciones

    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Blog</a></li>
        <li class="active">Lista de publicaciones</li>
    </ol>
</section>

<!-- Default box -->
<div class="box">

    <div class="box-body">
        <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"> Crear publicacion</i></button>

        <table id="posts-table" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Resumen</th>
                    <th>Fecha de publciacion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->excerpt}}</td>
                    <td>{{$post->published_at}}</td>
                    <td>
                        <a href="{{route('admin.blognoticias.editposts',$post)}}" class="btn btn-s btn-info"><i class="fa fa-pencil-alt"></i></a>
                        <a href="{{route('admin.blognoticias.delete',$post->id)}}" class="btn btn-s btn-danger"
                            onclick="return confirm('Esta seguro que desea eliminar este registro');"><i class="fa fa-times"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Resumen</th>
                    <th>Fecha de publciacion</th>
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
                        <input name="title" class="form-control" required placeholder="Ingrese el titulo del articulo">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button class="btn btn-primary">Guardar</button>
            </div>
            </form>
        </div>
    </div>
</div>






@endpush