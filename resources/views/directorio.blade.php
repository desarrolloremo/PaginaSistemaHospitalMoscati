@extends('header') 
@section('contenido')
<br>
<br>
<br>
<br>
<div class="container">
  <div class="blog" style="background-image: url('/img/SitioPrincipal/directorio/fondodirectorio.jpg')">
    <div class="blog_post">
      <div class="blog_post_title"><a href="#">Directorio medico</a></div>
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
  <div class="table">
    <table class="responstable">

      <tr>

        <th data-th="Datos generales"><span>Nombre completo</span></th>
        <th>Especialidad</th>
        <th>Subespecialidad</th>
        <th>Telefono</th>
        <th>Consultorio</th>
      </tr>
      @foreach ($posts as $post)
      <tr>
        <td>{{$post->nombre}}</td>
        <td>{{$post->especialidad}}</td>
        <td>{{$post->subespecialidad}}</td>
        <td>{{$post->telefono}}</td>
        <td>{{$post->consultorio}}</td>
      </tr>
      @endforeach
    </table>
  </div>
</div>
@endsection