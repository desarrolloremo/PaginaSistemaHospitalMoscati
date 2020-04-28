@extends('header') 
@section('contenido')
<br>
<br>
<br>
<br>
<br>
<div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->

    <div class="carousel-inner">
        

<div class="carousel-item active" style="background-image:url('img/SitioPrincipal/inicio/3.jpg');height:600px;background-position:50% 50%;background-size:cover"></div>
<div class="carousel-item" style="background-image:url('img/SitioPrincipal/inicio/4.jpg');height:600px;background-position:50% 50%;background-size:cover"></div>
<div class="carousel-item" style="background-image:url('img/SitioPrincipal/inicio/5.jpg');height:600px;background-position:50% 50%;background-size:cover"></div>
<div class="carousel-item " style="background-image:url('img/SitioPrincipal/inicio/6.jpg');height:600px;background-position:50% 50%;background-size:cover"></div>
<div class="carousel-item" style="background-image:url('img/SitioPrincipal/inicio/7.jpg');height:600px;background-position:50% 50%;background-size:cover"></div>
<div class="carousel-item" style="background-image:url('img/SitioPrincipal/inicio/8.jpg');height:600px;background-position:50% 50%;background-size:cover"></div>
    </div>

    <!-- Left and right controls -->

    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
     </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<div class="section-header">
    <h2><i class="fas fa-caret-right"></i> Excelencia y pasión por la vida <i class="fas fa-caret-left"></i></h2>
</div>
<div class="why">
    <div style="background: rgb(0, 37, 84, .9)">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <!-- Why Choose Us Image -->
                <div class="col-lg-5 ">
                    <img class="img-fluid" src="img/SitioPrincipal/inicio/bienvenidos.jpg" height="50px;">
                </div>
                <!-- Why Choose Us Content -->
                <div class="col-lg-7 order-lg-2">
                    <div class="why_content">
                        <div class="section_title_container">
                            <div class="section_subtitle"></div>
                            <div class="section_title">
                                <h2 style="color:white">Bienvenidos</h2>
                            </div>
                        </div>
                        <div class="why_text">
                            <p>Con el respaldo de una trayectoria de más de 20 años brindando la mejor atención medica en el estado, surge San José Moscati, un hospital dotado con la tecnología más avanzada de América Latina  y personal altamente capacitado para ofrecerte los mejores servicios para el cuidado de tu salud.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row text-center">
                <div class="col-sm-4">
                    <div class="row">
                        <div class="col-sm-3">
                            <br><img class="img-fluid iconobienvenida" src="img/SitioPrincipal/iconosheader/DOCTORICONO.png">
                        </div>
                        <div class="col-sm-9">
                            <div class="why_list_title">Contamos con más de 30 especialidades</div>
                            <p class="text-white pt-3">Un equipamiento completo de diagnóstico y tratamiento, y un plantel profesional reconocido.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <div class="col-sm-3">
                               <br><img class="img-fluid iconobienvenida" src="img/SitioPrincipal/iconosheader/ENFERMERAICONO.png">
                        </div>
                        <div class="col-sm-9">
                                <div class="why_list_title">Los mejores Médicos</div>
                                <p class="text-white pt-3">En Moscati, la constante capacitación y evaluación de nuestros médicos es primordial, lo cual nos permite garantizar la mejor atención a los pacientes cumpliendo los estándares más altos del hospital. Un equipo formado por  personas más talentosas  dedicadas a su profesión y comprometidas con la salud.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <div class="col-sm-3">
                            <br><img class="img-fluid iconobienvenida" src="img/SitioPrincipal/iconosheader/INYECCIONICONO.png">
                        </div>
                        <div class="col-sm-9">
                                <div class="why_list_title">La tecnología de punta con la que contará el Hospital</div>
                                <p class="text-white pt-3">Contamos con 13 quirófanos equipados con el instrumental quirúrgico más avanzado en la actualidad, uno de ellos con cardio ensuite. El cunero está aislado y es monitoreado las 24 horas del día por personal capacitado para brindar la mejor atención neonatal.</p>
                        </div>
                    </div>
                </div>


            </div>
            <br>
        </div>
        <br>
    </div>

</div>
<br>
<div class="services">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="section-header">
                    <a href="{{route('servicios')}}">
                        <h2> <i class="fas fa-caret-right"></i> Nuestros servicios</h2>
                    </a>
                </div>
                <div class="col-md-8 offset-md-2 mb-4">  
                        <p>Moscati contará con uno de los Centros Oncológicos más avanzados del continente; equipado con tomógrafo con PET, gamagrama, PET/CT con simulador, acelerador lineal, gamma knife, ciclotrón, Radio farmacia, braquiterapia y acelerador con resonancia magnética (Próximamente).</p> 
                </div>
            </div>
        </div>
        
        <div class="row mt-4">
            <br>
            <br>
            <br>
            <div class="col-md-4 col-sm-6">
                <div class="service_box">
                    <div class="service_icon">
                        <img src="img/SitioPrincipal/iconosheader/iconservicios/CEREBRO.png">
                    </div>
                    <h3>Neurofisiología</h3>
                    <p>El departamento de neurología ofrece un gran servicio para pacientes hospitalizados con equipos sofisticados
                        utilizados para el monitoreo de la epilepsia y la rehabilitación neurológica intensiva.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service_box">
                    <div class="service_icon">
                        <img src="img/SitioPrincipal/iconosheader/iconservicios/CORAZONICONO.png">
                    </div>
                    <h3>Cardiología</h3>
                    <p>Nuestro objetivo para los pacientes es proporcionar un servicio inigualable de primer nivel en casos
                        cardíacos complejos, que ofrezca los mejores resultados y la experiencia más exitosa para el paciente.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service_box">
                    <div class="service_icon">
                        <img src="img/SitioPrincipal/iconosheader/iconservicios/RINON.png">
                    </div>
                    <h3>Hemodiálisis</h3>
                    <p>Contamos con centros de hemodiálisis en el que se encuentran máquinas de diálisis y se ofrece al paciente
                        la valoración de un nefrólogo y nutriólogo además de brindar apoyo.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service_box">
                    <div class="service_icon">
                        <img src="img/SitioPrincipal/iconosheader/iconservicios/PARTO.png">
                    </div>
                    <h3>Ginecología</h3>
                    <p>Ofrecemos una serie de recomendaciones para las pacientes de este servicio en todas las etapas de su
                        vida, desde la adolescencia hasta la maternidad .</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service_box">
                    <div class="service_icon">
                        <img src="img/SitioPrincipal/iconosheader/iconservicios/HUESOS.png">
                    </div>
                    <h3>Traumatología</h3>
                    <p>Nos complace ofrecer tratamientos que no están disponibles en ningún otro lugar y practicamos un compromiso
                        continuo con la mejor experiencia posible con el paciente.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service_box">
                    <div class="service_icon">
                        <img src="img/SitioPrincipal/iconosheader/iconservicios/PIEICONO.png">
                    </div>
                    <h3>Ortopedia</h3>
                    <p>El departamento es reconocido internacionalmente por su excelencia en la atención ortopédica y el tratamiento
                        mínimamente invasivo de las lesiones deportivas.</p>
                </div>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-md-4 col-sm-6">
                <div class="service_box">
                    <div class="service_icon">
                        <img src="img/SitioPrincipal/iconosheader/iconservicios/PULMONES.png">
                    </div>
                    <h3>Neumología</h3>
                    <p>EL departamento tiene como objetivo ofrecer un servicio integral para la prevención, el diagnóstico y
                        tratamiento de las enfermedades respiratorias. </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service_box">
                    <div class="service_icon">
                        <img src="img/SitioPrincipal/iconosheader/iconservicios/OIDOICONO.png">
                    </div>
                    <h3>Otorrinolaringología</h3>
                    <p>Realizamos los procedimientos con las técnicas más modernas que nos ayudan al diagnóstico de cualquier
                        padecimiento mejorando la calidad de vida del paciente.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br> {{-- Mapa --}}

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14929.822738148974!2d-100.4377389!3d20.6917125!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xff06885aeeecc266!2sSan+Jos%C3%A9+Moscati!5e0!3m2!1ses-419!2smx!4v1548343879280"
    width="100%" ; height="450" ; min-height="400px" ; frameborder="0" style="border:0" allowfullscreen></iframe>
@endsection