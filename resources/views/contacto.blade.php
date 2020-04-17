@extends('header') 
@section('contenido')
    <br><br><br>
<div class="contact mt-4">
    <div class="container">
        <div class="row">

            <!-- Contact Form -->
            <div class="col-lg-6">
                <div class="contact_form_container">
                    <div class="contact_form_title">Déjanos un correo</div>
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

            <!-- Contact Content -->
            <div class="col-lg-5 offset-lg-1 contact_col">
                <div class="contact_content">
                    <div class="contact_content_title">Escribenos</div>
                    <div class="contact_content_text">
                        <p>Escribenos nos contactaremos a la brevedad</p>
                    </div>
                    <div class="direct_line d-flex flex-row align-items-center justify-content-start">
                        <div class="direct_line_title text-center">Teléfono</div>
                        <div class="direct_line_num text-center">+52 442 3885 420 </div>
                    </div>
                    <div class="contact_info">
                        <ul>
                            <li class="d-flex flex-row align-items-start justify-content-start">
                                <div>Dirección</div>
                                <div>Boulevard, Av. de las Ciencias 2058, Juriquilla, Qro.</div>
                            </li>
                            <li class="d-flex flex-row align-items-start justify-content-start">
                                <div>Teléfono</div>
                                <div>+52 442-325-93-54</div>
                            </li>
                            <li class="d-flex flex-row align-items-start justify-content-start">
                                <div>E-mail</div>
                                <div>yourmail@gmail.com</div>
                            </li>
                        </ul>
                    </div>
                    <div class="contact_social">
                        <p>Siguenos en nuestras redes sociales</p>
                        <ul class="d-flex flex-row align-items-center justify-content-start">
                            <li><a href="https://www.facebook.com/moscatiqro/" target="_blank"><i class="fab fa-facebook-f"  aria-hidden="true"></i></a></li>
                            <li><a href="https://www.instagram.com/Moscatiqro/" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
</div>



<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14929.822738148974!2d-100.4377389!3d20.6917125!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xff06885aeeecc266!2sSan+Jos%C3%A9+Moscati!5e0!3m2!1ses-419!2smx!4v1548343879280"
    width="100%" ; height="450" ; min-height="400px" ; frameborder="0" style="border:0" allowfullscreen></iframe>
@endsection