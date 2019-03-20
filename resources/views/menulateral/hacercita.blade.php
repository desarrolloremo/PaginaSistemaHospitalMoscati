@extends('header') 
@section('contenido')

<div class="container">
    <div class="blog">

        <div class="blog_post_title"><a href="#">Realizar Cita Medica</a></div>


        <br><br>
        <form method="POST" action="{{ action('Admin\BuscarPacienteController@obtenerFormulario')}}">
            {{csrf_field()}}
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group row">
                        <label for="txtNombres" class="col-sm-12 col-form-label">Nombres:</label>
                        <div class="col-sm-12">
                            <input name="nombre" type="text" class="form-control" placeholder="Ej. Juan" autocomplete="off" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="txtApePaterno" class="col-sm-12 col-form-label">Apellido Paterno:</label>
                        <div class="col-sm-12">
                            <input name="apepaterno" maxlength="80" i type="text" class="form-control" placeholder="Ej. González" autocomplete="off"
                            />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="txtApeMaterno" class="col-sm-12 col-form-label">Apellido Materno:</label>
                        <div class="col-sm-12">
                            <input name="apematerno" maxlength="80" type="text" class="form-control" placeholder="Ej. López" autocomplete="off" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="txtDireccion" class="col-sm-12 col-form-label">Direccion:</label>
                        <div class="col-sm-12">
                            <input name="direccion" maxlength="80" type="text" class="form-control" placeholder="Dirección Completa" autocomplete="off"
                            />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="txtTelefono" class="col-sm-12 col-form-label">Telefono :</label>
                        <div class="col-sm-12">
                            <input name="telefono" maxlength="10" type="text" class="form-control" placeholder="Telefono Celular o Fijo" autocomplete="off"
                            />
                        </div>
                    </div>

                </div>
                <div class="col-sm-6">
                    <div class="form-group row">
                        <label for="txtNombres" class="col-sm-12 col-form-label">Consulta privada o con seguro:</label>
                        <div class="col-sm-12">
                            <select class="form-control" name="" id="">
                                <option value="Ninguno">Ninguno</option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="txtApePaterno" class="col-sm-12 col-form-label">Fecha preferente consulta:</label>
                        <div class="col-sm-12">
                         <input name="fechaconsulta" type="date" value="<?php echo date("Y-m-d"); ?>" class="form-control" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="txtApeMaterno" class="col-sm-12 col-form-label">Horario preferente de consulta:</label>
                        <div class="col-sm-12">
                            <input name="horarioconsulta" type="time" min="08:00" max="18:00" step="1800" value="08:00" class="form-control" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="txtDireccion" class="col-sm-12 col-form-label">Horario preferente de contacto:</label>
                        <div class="col-sm-12">
                            <input name="horariocontacto" type="time" min="08:00" max="18:00" step="1800" value="08:00" class="form-control" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="blog_post_button text-center">
                <div class="header_phone mr-auto">
                    <button type="submit" class="btn btn-default">
                             <span class="far fa-paper-plane" style="color: #fff"> Enviar</span>
                        </button>
                </div>
            </div>


        </form>
    </div>
</div>
@endsection