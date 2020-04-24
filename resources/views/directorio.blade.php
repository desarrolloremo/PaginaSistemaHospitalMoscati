@extends('header') 
@section('contenido')
<br>
<br>
<br>
<br>
<div class="container" style="margin-top:3rem!important">
  <div class="blog" style="background-image: url('img/SitioPrincipal/inicio/7.jpg');    background-position: 50% 31%;
    background-size: cover;
    background-repeat: no-repeat;">
    <div class="blog_post">
      <div class="blog_post_title"><a href="#" class="text-white">Próximamente</a></div>
      <div class="blog_post_text text-center">

        
        <form method="POST" action="{{ action('Admin\DirectorioDoctorControler@home')}}">
          {{csrf_field()}}
          <p>Busca por nombre, especialidad o subespecialidad:</p><br>
          <input class="intro_input" type="text" style="background: white;"  name="data" />

          <div class="blog_post_button text-center">
            <div class="header_phone mr-auto">
              <button type="submit" class="btn btn-default">
                <span class="fa fa-search" style="color: #fff"> Buscar</span>
            </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  {{
  <div class="table">
    <table class="responstable">
      <tr>
        <th data-th="Datos generales"><span>Nombre completo</span></th>
        <th>Especialidad</th>
        <th>Subespecialidad</th>
        <th>Teléfono</th>
        <th>Consultorio</th>
      </tr>
      @if(count($posts)>0)
      @foreach ($posts as $post)
      <tr>
        <td>{{$post->nombre}}</td>
        <td>{{$post->especialidad}}</td>
        <td>{{$post->subespecialidad}}</td>
        <td>{{$post->telefono}}</td>
        <td>{{$post->consultorio}}</td>
      </tr>
      @endforeach
      @else
      <br>
      <div class="alert alert-dismissable alert-warning">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <h4>Mensaje!</h4>
      <p>No se encuentran disponibles por el momento.</p>
      </div>
      <br>
      @endif
    </table>
  </div>}}
</div>
@endsection