@extends('header') 
@section('contenido')
<br>
<br>
<br>
<br>
<br>

<div class="bloc bgc-white  l-bloc bg-repeat" id="bolsa" style="margin-top:7rem!important">
    <div style="color:#333;" class="container bloc-md">
        <div class="row">
            <div class="col-sm-6">
                <img src="img/SitioPrincipal/bolsatrabajo/bolsatrabajogrupo.jpg" class="img-responsive img-frame">
            </div>
            <div class="col-sm-6">

                <h3 class="mg-lg">
                    <strong>Bolsa de trabajo:<br> Miembro del equipo</strong>
                </h3>
                <p class="mg-lg text-justify ">
                    Puedes ver las vacantes disponibles y contactarnos por los siguientes medios:
                </p><br>
                <div>
                    <a style="color:#525252" href="https://www.facebook.com/hospitalsanjosemoscati/" target="_blank"><i class="fa fa-laptop fa-2x"></i> Computrabajo</a><br><br>
                    <a style="color:#525252" href="https://www.facebook.com/hospitalsanjosemoscati/" target="_blank"><i class="fab fa-facebook fa-2x"></i> Facebook</a> <br><br>
                    <i class="fa fa-envelope fa-2x"></i> Contacto: rh@moscati.com.mx <br>
                </div>
            </div>
        </div>
    </div>
</div>
<br>

<div class="bloc bgc-white  l-bloc bg-repeat">
    <div style="color:#333;" class="container bloc-md">
        <div class="row">
            <div class="col-sm-12">

                <p class="mg-lg text-justify ">
                    Vacantes disponibles:
                </p>
                <table class="table table-action">

                    <thead>
                        <tr>
                            <th class="t-medium">Nombre puesto</th>
                            <th class="t-medium">Detalles</th>
                            <th class="t-medium">Publicado</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($posts)>0)
                        @foreach ($posts as $post)
                        <tr>
                            <td><a href="bolsadetrabajo/{{ $post->nombre}}">{{$post->nombre}}</a></td>
                            <td>{{$post->excerpt}}</td>
                            <td>{{ Carbon\Carbon::parse($post->published_at)->format('d-m-Y') }}</td>
                        </tr>
                        @endforeach
                        @else
                        <div class="alert alert-dismissable alert-warning">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <h4>Mensaje!</h4>
                        <p>No hay vacantes disponibles por el momento.</p>
                        </div>
                        @endif
                    </tbody>

                </table>


            </div>
        </div>
    </div>
</div>
@endsection