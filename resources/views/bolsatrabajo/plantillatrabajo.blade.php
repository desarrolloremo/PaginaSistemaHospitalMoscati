@extends('header') 
@section('contenido')
<br>
<br>
<br>
<br>
<br>
<div class="row">
    <div class="container">
        <div class="col-lg-12">

            <!-- Title -->
            <h1 class="mt-4">{{$posts->nombre}}</h1>
            <hr>
            <!-- Date/Time -->
            <p>{{$posts->excerpt}}</p>

            <hr>
            <article>
                {!! $posts->descripcion !!}
            </article>

            <hr>
        </div>
        <div class="alert alert-info">
            <strong>Postulate:</strong> Envianos tu CV al correo <a href="mailto:rh@moscati.com.mx ">rh@moscati.com.mx</a>
          </div>
    </div>

</div>
</div>

</div>
@endsection