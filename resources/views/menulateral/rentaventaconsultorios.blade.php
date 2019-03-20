@extends('header') 
@section('contenido')

<div class="container">
    <div class="blog">

        <div class="blog_post_title"><a href="#">Informes venta y renta de consultorios medicos</a></div>
        <div class="contact_content_text">
                <p class="text-center">Forma parte de nuestra familia, compra o renta un consultorio con todas las instalaciones que necesitas</p>
                <span><p class="text-center">Todos los consultorios cuentan con servicio de internet, teléfono, telecable, agua, luz, salas de espera comunes, áreas comunes y secretaria en común para canalizar a todos los pacientes.<br></p></span> 
                <span><p class="text-center">Todos los consultorios cuentan con baño privado y todos los servicios para instalar cualquier tipo de equipo médico.<br></p></span> 
            </div>
            <br><br>
        <form method="POST" action="{{ action('Admin\BuscarPacienteController@obtenerFormulario')}}">
            {{csrf_field()}}
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact_form_container">
                        <div class="contact_form_title">Informes para consultorios</div>
                        <form action="#" class="contact_form" id="contact_form">
                            <div class="d-flex flex-row align-items-start justify-content-between flex-wrap">
                                <input type="text" class="contact_input" placeholder="Tu nombre" required="required">
                                <input type="email" class="contact_input" placeholder="Tu email" required="required">
                                <input type="text" class="contact_input" placeholder="Asunto" required="required">
                                <input type="text" class="contact_input" style="height: 100px;" placeholder="Correo" required="required">


                            </div>
                            <button class="button button_1 contact_button ">Enviar</button>
                        </form>
                    </div>
                </div>

            </div>

        </form>
    </div>
</div>
@endsection