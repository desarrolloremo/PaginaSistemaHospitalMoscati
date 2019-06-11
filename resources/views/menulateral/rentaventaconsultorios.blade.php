@extends('header') 
@section('contenido')


    <div class="blog">
        <div class="blog_post_title" style="text-align:center">
            <nav aria-label="breadcrumb">
                    <ul>
                        <li class="Objeto-inteligente-vectorial"><a href=""></a></li>
                    </ul>
                    <div class="section-header">
                            <h2><i class="fas fa-caret-right"></i> Venta / Renta de Consultorios </h2>
                    </div>
            </nav>
        </div>

        <div class="contact_content_text">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/SitioPrincipal/cosultorios/consultorio1.jpg" class="d-block w-200" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/SitioPrincipal/cosultorios/consultorio2.jpg" class="d-block w-200" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/SitioPrincipal/cosultorios/consultorio3.jpg" class="d-block w-200" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/SitioPrincipal/cosultorios/consultorio4.jpg" class="d-block w-200" alt="...">
                  </div>
                </div>
                <a class="" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
                <br><br>

    <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-0">
                        <hr class="">
                    </div>
                    <div class="col-sm-3">
                        <p>Consultorios Médicos</p>
                    </div>
                </div>
                <ul>
                    <li type="disc">
                       <a class="nav-link active" href="#"><p class="links">Consultorio I</p></a>
                    </li>
                    <li type="disc">
                       <a class="nav-link active" href="#"><p class="links">Consultorio II</p></a>
                    </li>
                    <li type="disc">
                       <a class="nav-link active" href="#"><p class="links">Consultorio III</p></a>
                    </li>
                </ul>
            </div>
            <br>

            <div class="container">
                    <h1 class="titulo1">Consultorio I</h1><br>
                    <hr class="consultorio1">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                            <button type="button" class="btn btn-primary">Renta</button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                            <button type="button" class="btn btn-secondary">Venta</button>
                        </a>
                    </li>
                </ul>
                <br>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="precios">$7,000 mensual</h3>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h3 class="precios">$9,000 mensual</h3>
                    </div>
                </div>
            </div>
                    <br><br>
                    <h3 class="titulo1">Descripción</h3>
                    <br>
                    <p class="parrafo">Hospital San José Moscati es un edificio inteligente de 28 niveles, vanguardista con instalaciones, 
                       acabados y equipamiento de primer nivel, cuenta con 300 consultorios con vista panorámica 360º hacia Juriquilla y sus alrededores, 
                       Roof Garden y Club médico con gimnasio, terraza y alberca.

                        Dispone de 9 elevadores, 3 de pasajeros, 2 camilleros en torre,  2 de servicio y 2 camilleros en Hospital, escaleras de servicio 
                        y emergencia. 
                    </p><br>

                    <h3 class="parrafo">Enfoque de calidad y seguridad</h3><br>

                    <p class="parrafo">Las normas y estándares aplicados en el hospital, gestionan la mejora continua de la calidad de atención médica, 
                       garantizando la seguridad del paciente. Lo anterior permitirá la obtención de certificaciones ante organismos como Joint Commission 
                       y  El Consejo de Salubridad General.

                    </p><br>

                    <h3 class="titulo1">Áreas</h3><br>

                    <ul>
                        <li type="disc">
                           <a class="nav-link active" href="#"><p class="parrafo">Urgencias cuenta 8 cubículos, 2 pediátricos.</p></a>
                        </li>
                        <li type="disc">
                            <a class="nav-link active" href="#"><p class="parrafo">1 Cardio Suite y 6 Quirófanos Inteligentes.</p></a>
                        </li>
                        <li type="disc">
                            <a class="nav-link active" href="#"><p class="parrafo">Cirugía ambulatoria, 4 áreas de labor y 3 de tococirugías.</p></a>
                        </li>
                        <li type="disc">
                            <a class="nav-link active" href="#"><p class="parrafo">Terapia Intensiva, cuenta con 14 módulos e intermedia con 5 módulos.</p></a>
                        </li>
                        <li type="disc">
                            <a class="nav-link active" href="#"><p class="parrafo">Hemodiálisis, cuenta con 25 posiciones y 5 aislados positivos.</p></a>
                        </li>
                        <li type="disc">
                            <a class="nav-link active" href="#"><p class="parrafo">Imagen con Tomógrafo Dual CT, PET Scanner, Resonancia Magnética 1.5 T, Rayos X, 
                                                                   Fluoroscopio, Ultrasonido 4D, Mastografía y Angiografía con Hemodinamia, Tomógrafo 
                                                                   256 cortes, Área reservada para Cyberknife y Acelerador lineal en segunda etapa.</p>
                            </a>
                        </li>
                        <li type="disc">
                            <a class="nav-link active" href="#"><p class="parrafo">Restaurante, cuenta con terraza (Roof Garden), vista panorámica y capacidad de 250 comensales.</p></a>
                        </li>
                        <li type="disc">
                            <a class="nav-link active" href="#"><p class="parrafo">Roof Garden</p></a>
                        </li>
                        <li type="disc">
                            <a class="nav-link active" href="#"><p class="parrafo">Laboratorio</p></a>
                        </li>
                        <li type="disc">
                            <a class="nav-link active" href="#"><p class="parrafo">Centro de investigación</p></a>
                        </li>
                        <li type="disc">
                            <a class="nav-link active" href="#"><p class="parrafo">Club médico con vista panorámica, gimnasio, terraza y alberca.</p></a>
                        </li>
                    </ul>
                    <br>
                    <h3 class="parrafo">Detalles Generales</h3><br>
                    <p class="parrafo2">Área del Consultorio: 25 m2</p><br>

                    <h3 class="titulo1">Características</h3><br>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <img class="iconos" src="img/SitioPrincipal/icons/baño.png" alt="..." class="img-thumbnail">
                                <p>2 Baños</p>
                            </div>
                            <div class="col">
                                <img class="iconos" src="img/SitioPrincipal/icons/sala.png" alt="..." class="img-thumbnail">
                                <p>Sala de espera</p>
                            </div>
                        </div>
                    </div>
            </div><br>

            <div class="container">
                    <h3>Servicio</h3><br>

                    <div class="row">
                        <div class="col">
                            <ul>
                                <li type="disc">
                                    <a class="nav-link active" href="#"><p class="parrafo">Seguridad Privada</p></a>
                                </li>
                                <li type="disc">
                                    <a class="nav-link active" href="#"><p class="parrafo">Conmutador</p></a>
                                </li>
                                <li type="disc">
                                    <a class="nav-link active" href="#"><p class="parrafo">Línea telefónica</p></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                <li type="disc">
                                    <a class="nav-link active" href="#"><p class="parrafo">Aire Acondicionado</p></a>
                                </li>
                                <li type="disc">
                                    <a class="nav-link active" href="#"><p class="parrafo">Cajón de Estacionamiento</p></a>
                                </li>
                                <li type="disc">
                                    <a class="nav-link active" href="#"><p class="parrafo">Elevador</p></a>
                                </li>
                            </ul>
                        </div>
                    </div>
            </div><br>

            <div class="container">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/SitioPrincipal/cosultorios/consultorio1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/SitioPrincipal/cosultorios/consultorio2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/SitioPrincipal/cosultorios/consultorio3.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                               <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                               <span class="carousel-control-next-icon" aria-hidden="true"></span>
                               <span class="sr-only">Next</span>
                            </a>
                </div>
            </div>
            <br><br>

            <div class="container">
                    <h3 class="parrafo">Para más información</h3><br>
                    <p class="parrafo">Llena la siguiente solicitud para que uno de nosotros asesores se poanga en contacto contigo</p>
            </div>
            <br>

        <form method="POST" action="{{ action('Admin\BuscarPacienteController@obtenerFormulario')}}">
                {{csrf_field()}}
                    <div class="container">
                        <form action="#" class="contact_form" id="contact_form">
                            <div class="d-flex flex-row align-items-start justify-content-between flex-wrap">
                                <div class="row">
                                    <div class="col">
                                        <label for="">Nombre Completo</label>
                                        <input type="text" class="contact_input" placeholder="" required="required">
                                        <label for="">Télefono</label>
                                        <input type="text" class="contact_input" placeholder="" required="required">
                                        <label for="">Horario de Contacto</label>
                                        <input type="text" class="contact_input" placeholder="" required="required">
                                    </div>
                                    <div class="col">
                                        <label for="">Email</label>
                                        <input type="email" class="contact_input" placeholder="" required="required">
                                        <label for="">Mensaje</label>
                                        <input type="text" class="contact_input" style="height: 100px;" placeholder="" required="required">
                                    </div>
                                </div>
                            </div>
                            <!-- <button class="button button_1 contact_button ">Enviar</button> -->
                            <button type="button" class="btn btn-primary btn-lg btn-block">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </form>
      </div>
    </div>


    
@endsection