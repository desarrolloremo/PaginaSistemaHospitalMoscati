@extends('header') 
@section('contenido')

<div class="container">
    <div class="blog">

        <div class="blog_post_title"><a href="#">Pre-admisión Hospitalaria</a></div>

        <form method="POST" action="{{ action('Admin\BuscarPacienteController@obtenerFormulario')}}">
            {{csrf_field()}}
            <div class="blog_post_subtitle">Datos Personales</div>
            <div class="row" style="margin:20px" >
                <div class="col-sm-4">
                    <div class="form-group row">
                        <label for="txtNombres" class="col-sm-12 col-form-label">Nombre(s):</label>
                        <div class="col-sm-12">
                            <input name="nombre" type="text" class="form-control" placeholder="Ej. Juan" autocomplete="off" required/>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group row">
                        <label for="txtapellidosPaterno" class="col-sm-12 col-form-label">Apellido Paterno:</label>
                        <div class="col-sm-12">
                            <input name="apellidosPaterno" type="text" class="form-control" placeholder="Ej. Gonzales" required/>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group row">
                        <label for="txtapellidosMaterno" class="col-sm-12 col-form-label">Apellido Materno:</label>
                        <div class="col-sm-12">
                            <input name="apellidosMaterno" type="text" class="form-control" placeholder="Ej. Gonzales" required/>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="form-group row">
                        <label for="txtcorreoelectronico" class="col-sm-12 col-form-label">Correo electronico:</label>
                        <div class="col-sm-12">
                            <input name="correoelectronico" type="mail" class="form-control" required/>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group row">
                        <label for="txtTelefono" class="col-sm-12 col-form-label">Telefono:</label>
                        <div class="col-sm-12">
                            <input name="Telefono" type="tel" class="form-control" placeholder="(Código de área) Número" required/>
                        </div>
                    </div>
                </div>
            </div>{{-- END ROW --}}
            <div class="blog_post_subtitle">Dirección</div>
            <div class="row" style="margin:20px">
                <div class="col-sm-6">
                    <div class="form-group row">
                        <label for="txtdireccion" class="col-sm-12 col-form-label">Direccion:</label>
                        <div class="col-sm-12">
                            <input name="direccion" type="text" class="form-control" required/>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group row">
                        <label for="txtcolonia" class="col-sm-12 col-form-label">Colonia:</label>
                        <div class="col-sm-12">
                            <input name="colonia" type="mail" class="form-control" required/>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group row">
                        <label for="txtcuidad" class="col-sm-12 col-form-label">Cuidad:</label>
                        <div class="col-sm-12">
                            <input name="cuidad" type="text" class="form-control" required/>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group row">
                        <label for="txtestado" class="col-sm-12 col-form-label">Estado:</label>
                        <div class="col-sm-12">
                            <input name="estado" type="text" class="form-control" required/>
                        </div>
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="form-group row">
                        <label for="txtCP" class="col-sm-12 col-form-label">CP:</label>
                        <div class="col-sm-12">
                            <input name="CP" type="tel" class="form-control" required/>
                        </div>
                    </div>
                </div>
            </div>{{-- END ROW --}}
            <div class="blog_post_subtitle">Responsable o acompañante
                <p>(Obligatorio menores de edad)</p>
            </div>
            <div class="row" style="margin:20px">
                <div class="col-sm-6">
                    <div class="form-group row">
                        <label for="txtNombreAcompañante" class="col-sm-12 col-form-label">Nombre Acompañante:</label>
                        <div class="col-sm-12">
                            <input name="NombreAcompañante" type="text" class="form-control" required/>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group row">
                        <label for="txtParentesco" class="col-sm-12 col-form-label">Parentesco:</label>
                        <div class="col-sm-12">
                            <input name="Parentesco" type="mail" class="form-control" required/>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group row">
                        <label for="txtDireccionAcompañante" class="col-sm-12 col-form-label">Direccion Acompañante:</label>
                        <div class="col-sm-12">
                            <input name="DireccionAcompañante" type="text" class="form-control" required/>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group row">
                        <label for="txtTelefonoAcompañante" class="col-sm-12 col-form-label">Telefono Acompañante:</label>
                        <div class="col-sm-12">
                            <input name="TelefonoAcompañante" type="text" class="form-control" required/>
                        </div>
                    </div>
                </div>

            </div>{{-- END ROW --}}
            <div class="blog_post_subtitle">Detalles internado</div>
            <div class="row" style="margin:20px">
                <div class="col-sm-6">
                    <div class="form-group row">
                        <label for="txtMedicointerna" class="col-sm-12 col-form-label">Medico que interna:</label>
                        <div class="col-sm-12">
                            <input name="Medicointerna" type="text" class="form-control" required/>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group row">
                        <label for="txtProcedimiento" class="col-sm-12 col-form-label">Procedimiento:</label>
                        <div class="col-sm-12">
                            <input name="Procedimiento" type="mail" class="form-control" required/>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group row">
                        <label for="txtAseguradora" class="col-sm-12 col-form-label">Aseguradora:</label>
                        <div class="col-sm-12">
                            <input name="Aseguradora" type="text" class="form-control" required/>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group row">
                        <label for="txtfechaingreso" class="col-sm-12 col-form-label">Fecha de ingreso:</label>
                        <div class="col-sm-12">
                            <input name="fechaingreso" type="date" value="<?php echo date(" Y-m-d "); ?>" class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="form-group row">
                        <label for="txtobervaciones" class="col-sm-12 col-form-label">Obervaciones/Requerimientos especiales:</label>
                        <div class="col-sm-12">
                            <textarea class="form-control" name="obervaciones" id="obervaciones" cols="5" rows="5"></textarea>
                        </div>
                    </div>
                </div>

            </div>{{-- END ROW --}}
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