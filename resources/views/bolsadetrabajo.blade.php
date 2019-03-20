@extends('header') 
@section('contenido')
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="bloc bgc-white  l-bloc bg-repeat" id="bolsa">
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
                </p>
                <p>
                    <span><a href="" target="_blank"><i class="fa fa-laptop fa-2x" aria-hidden="true"></i> Computrabajo</a></span><br><br>
                    <span><a href="" target="_blank"><i class="fab fa-facebook fa-2x" aria-hidden="true"></i> Facebook</a> </span><br><br>
                    <i class="fa fa-envelope fa-2x" aria-hidden="true"></i> Contacto: rh@moscati.com.mx <br>
                </p>
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
                <br>
                <br>
                <table class="table table-action">

                    <thead>
                        <tr>
                            <th class="t-medium">Nombre puesto</th>
                            <th class="t-medium">Detalles</th>
                            <th class="t-medium">Publicado</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                        <tr>
                            <td><a href="bolsadetrabajo/{{ $post->nombre}}">{{$post->nombre}}</a></td>
                            <td>{{$post->excerpt}}</td>
                            <td>{{ Carbon\Carbon::parse($post->published_at)->format('d-m-Y') }}</td> 
                        </tr>
                        @endforeach

                    </tbody>
                </table>



            </div>
        </div>
    </div>
</div>
@endsection