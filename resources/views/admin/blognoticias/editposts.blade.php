@extends('admin.layaout') 
@section('contenido')
<section class="content-header">
    <h1>
        Editar publicacion

    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Blog</a></li>
        <li class="active">Editar publicacion</li>
    </ol>
</section>

<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Lista de publicaciones</h3>

    </div>
    <div class="box-body">
        <div class="col-md-8">
            <form method="POST" action="{{ route('admin.blognoticias.update',$post)}}">
                {{csrf_field()}} {{ method_field('PUT')}} 
                <div class="card">

                    <div class="card-body">
                        <div class="form-group">
                            <label>Titulo de la publicacion</label>
                            <input name="title" value="{{old('title', $post->title)}}" class="form-control" placeholder="Ingrese el titulo del articulo"
                                required>
                        </div>

                        <div class="form-group">
                            <label>Contenido de la publicacion</label>
                            <textarea name="body" id="editor">{{Request::old('body', $post->body)}}</textarea>
                        </div>

                    </div>
                </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label>Extracto de la publicacion</label>
                        <textarea class="form-control" name="excerpt" placeholder="Ingresa una breve descripcion del articulo" >{{Request::old('excerpt', $post->excerpt)}} </textarea>
                    </div>
                    <label>Fecha en que se publicara</label><br>
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input name="published_at" type="text" value="{{old('published_at', $post->published_at)}}" class="form-control pull-right" id="datepicker">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Categoria:</label>
                        <input name="categoria" class="form-control"  value="{{old('categoria', $post->categoria)}}" placeholder="Ingrese la categoria del articulo">
                    </div>
                    <div class="form-group">
                        <label>Imagenes:</label>
                        <div class="dropzone"></div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Guardar Publicacion</button>
                    </div>
                </div>
            </div>
        </div>

        </form>
    </div>
    <!-- /.box-body -->

</div>
<!-- /.box -->
@endsection
 @push('styles')
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css">
<link rel="stylesheet" href="../../assetsLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
<meta name="csrf-token" content="{{ csrf_token() }}"> 
@endpush @push('scripts')
<!-- bootstrap datepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
<script src="../../assetsLTE/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdn.ckeditor.com/4.11.2/standard/ckeditor.js"></script>
<script>
    //Date picker
        $('#datepicker').datepicker({
          autoclose: true
        })
        CKEDITOR.replace( 'editor' );
        var myDropzone = new Dropzone('.dropzone',{
            url: '/admin/posts/{{$post->url}}/photos',
            paramName: 'photo',
            dictDefaultMessage: 'Arrasta tu imagen de portada',
           
            maxFilesize: 3,
            
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
    myDropzone.on('error', function(file,res){
        console.log(res.errors.photo[0]);
        var msg = res.errors.photo[0]
        $('.dz-error-message > span').text(msg);
    })

            Dropzone.autoDiscover = false;

</script>

@endpush