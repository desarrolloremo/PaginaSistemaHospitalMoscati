@extends('header') 
@section('contenido')
<br>
<br>
<div class="container">
  <div class="blog">

    <div class="blog_post_title"><a href="#">Consulta de Pacientes Hospitalizados</a></div>

    <p style="color:black;text-align: center; margin:20px; ">Estimada Comunidad Usuaria: Como una forma de facilitar el acceso a información oportuna sobre la 
                                                             ubicación de pacientes que se encuentren hospitalizados en nuestro Complejo Asistencial, hemos 
                                                             dispuesto el siguiente formulario de consulta,en el cual podrá acceder a información genérica 
                                                             sobre la unidad de hospitalización donde se encuentre hospitalizado un paciente.
      <br><br>La información aquí presentada será la misma que podrá obtener en las Oficinas de Información, Reclamos y Sugerencias
       del hospital, con la única diferencia de ofrecer una mayor oportunidad de acceso mediante una consulta a distancia.
      <div class="blog_post_text text-center">
    </p>
    <br><br>
   
    <div class="col-sm-12">
      <form method="POST" action="{{ action('Admin\BuscarPacienteController@obtenerFormulario')}}">
        {{csrf_field()}}

        <div class="form-group row">
          <label for="txtNombres" class="col-sm-4 col-form-label">Nombres:</label>
          <div class="col-sm-6">
            <input name="nombre"  maxlength="80"  type="text" class="form-control" placeholder="Ej. Juan"
              autocomplete="off" />
          </div>
        </div>

        <div class="form-group row">
          <label for="txtApePaterno" class="col-sm-4 col-form-label">Apellido Paterno:</label>
          <div class="col-sm-6">
            <input name="apepaterno"  maxlength="80" i type="text" class="form-control" placeholder="Ej. González"
              autocomplete="off" />
          </div>
        </div>

        <div class="form-group row">
          <label for="txtApeMaterno" class="col-sm-4 col-form-label">Apellido Materno:</label>
          <div class="col-sm-6">
            <input name="apematerno"  maxlength="80"  type="text" class="form-control" placeholder="Ej. López"
              autocomplete="off" />
          </div>
        </div>



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
</div>

</div>
@endsection