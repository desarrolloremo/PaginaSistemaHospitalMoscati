@extends('header') 
@section('contenido')
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
        <div class="carousel-item active"> <img src="img/SitioPrincipal/inicio/fotodoctor.jpg"> </div>
        <div class="carousel-item"> <img src="img/SitioPrincipal/inicio/fotodoctor.jpg"> </div>
        <div class="carousel-item"> <img src="img/SitioPrincipal/inicio/fotodoctor.jpg"> </div>
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
    <div style="background: rgb(28, 37, 51, .9)">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <!-- Why Choose Us Image -->
                <div class="col-lg-4 ">
                    <br>
                    <img class="img-fluid rounded mx-auto d-block" src="img/SitioPrincipal/iconosheader/DOCTORESFOTO.png">
                </div>
                <!-- Why Choose Us Content -->
                <div class="col-lg-8 order-lg-2">
                    <div class="why_content">
                        <div class="section_title_container">
                            <div class="section_subtitle"></div>
                            <div class="section_title">
                                <h2 style="color:white">Bienvenidos a nuestra clínica</h2>
                            </div>
                        </div>
                        <div class="why_text">
                            <p>En <strong> Hospital San José Moscati </strong>, brindamos calidad en nuestros servicios y para lograrlo, contamos
                                con personal calificado en cada una de las áreas y servicios. La capacitación es una de nuestras
                                fortalezas y cada uno de los que colaboramos en esta empresa somos profesionales en nuestra
                                área.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-sm-1">
                    <img class="img-why" src="img/SitioPrincipal/iconosheader/DOCTORICONO.png">
                </div>
                <div class="col-sm-3">
                    <div class="why_list_title">Contamos con más de 40 especialidades</div>
                    <div class="why_list_text">Un equipamiento completo de diagnóstico y tratamiento, y un plantel profesional reconocido.</div>
                </div>
                <div class="col-sm-1">
                    <img class="img-why" src="img/SitioPrincipal/iconosheader/ENFERMERAICONO.png">
                </div>
                <div class="col-sm-3">
                    <div class="why_list_title">Los mejores doctores</div>
                    <div class="why_list_text">Nuestros profesionales investigan y participan de talleres de formación reconocidos a nivel mundial</div>
                </div>
                <div class="col-sm-1">
                    <img class="img-why" src="img/SitioPrincipal/iconosheader/INYECCIONICONO.png">
                </div>
                <div class="col-sm-3">
                    <div class="why_list_title">Equipo de enfermeras</div>
                    <div class="why_list_text">Que mantienen una relación óptima<br> que permite una atención personalizada.</div>
                </div>

            </div>
            <br>
        </div>

    </div>
</div>
<div class="services">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                    <div class="section-header">
                        <a href="{{route('servicios')}}">
                            <h2> <i class="fas fa-caret-right"></i> Nuestros servicios</h2>
                        </a>
                    </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="service_box">
                    <div class="service_icon">
                        <img src="img/SitioPrincipal/iconosheader/CEREBRO.png">
                    </div>
                    <h3>Neurofisiologia</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Deleniti, ducimus Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service_box">
                    <div class="service_icon">
                        <img src="img/SitioPrincipal/iconosheader/CORAZONICONO.png">
                    </div>
                    <h3>Cardiología</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Deleniti, ducimus Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service_box">
                    <div class="service_icon">
                        <img src="img/SitioPrincipal/iconosheader/RIÑON.png">
                    </div>
                    <h3>Hemodialisis</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Deleniti, ducimus Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service_box">
                    <div class="service_icon">
                        <img src="img/SitioPrincipal/iconosheader/PARTO.png">
                    </div>
                    <h3>Ginecología</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Deleniti, ducimus Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service_box">
                    <div class="service_icon">
                        <img src="img/SitioPrincipal/iconosheader/HUESOS.png">
                    </div>
                    <h3>Traumatología</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Deleniti, ducimus Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service_box">
                    <div class="service_icon">
                        <img src="img/SitioPrincipal/iconosheader/PIEICONO.png">
                    </div>
                    <h3>Ortopedia</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Deleniti, ducimus Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-md-4 col-sm-6">
                <div class="service_box">
                    <div class="service_icon">
                        <img src="img/SitioPrincipal/iconosheader/PULMONES.svg">
                    </div>
                    <h3>Neumología</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Deleniti, ducimus Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service_box">
                    <div class="service_icon">
                        <img src="img/SitioPrincipal/iconosheader/OIDOICONO.png">
                    </div>
                    <h3>Otorrinolaringología</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Deleniti, ducimus Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br> {{-- Mapa --}}

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14929.822738148974!2d-100.4377389!3d20.6917125!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xff06885aeeecc266!2sSan+Jos%C3%A9+Moscati!5e0!3m2!1ses-419!2smx!4v1548343879280"
    width="100%" ; height="450" ; min-height="400px" ; frameborder="0" style="border:0" allowfullscreen></iframe>
@endsection