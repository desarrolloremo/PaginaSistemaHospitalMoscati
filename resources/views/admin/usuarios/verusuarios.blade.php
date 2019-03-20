@extends('admin.layaout') 
@section('contenido')
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