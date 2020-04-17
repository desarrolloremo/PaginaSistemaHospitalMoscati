<!doctype html>
<html lang="es">

<head>
  <title>Hospital San José Moscati</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.5/datepicker.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">

  <link rel="stylesheet" href="/css/estilos.css" />
  <link rel="stylesheet" href="/css/responsive.css" />
  <link rel="stylesheet" href="/css/contact.css" />
  <link rel="stylesheet" href="/css/contact_responsive.css" />
  <link rel="stylesheet" href="/css/normalize.css">
  <link rel="stylesheet" href="/css/framework.css">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/responsive.css">
  <link rel="stylesheet" href="/css/nosotros.css" />

</head>

<body>
  <div class="super_container">

    <!-- Header -->
    <header class="header trans_400">
      <div class="row">
        <div class="col-lg-4" style="padding-right: 0px; padding-left: 0px;">
          <div class="section-rojo">
            <i class="fas fa-phone" style="margin-left: 20%;"></i> URGENCIAS: +52 442 388 5420
          </div>
        </div>
        <div class="col-lg 8" style="padding-right: 0px; padding-left: 0px;">
          <div class="emergencias">
            <a href="https://www.instagram.com/moscatiqro/"><i class="fab fa-instagram" aria-hidden="true"></i></a>
            <a href="https://www.facebook.com/Moscatiqro/"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
          </div>
        </div>

      </div>



      <div class="header_content d-flex flex-row align-items-center jusity-content-start">

        <!-- Logo -->
        <div class="logo">
          <a href="{{route('/')}}"><img src="/img/SitioPrincipal/logo.png" alt="" width="350px"></a>
        </div>
        <!-- Main Navigation -->
        <nav class="main_nav">
          <ul class="d-flex flex-row align-items-center justify-content-start">
            <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{route('/')}}">Inicio</a></li>
            <li class="{{ Request::is('nosotros') ? 'active' : '' }}"><a href="{{route('nosotros')}}">Nosotros</a></li>
            <li class="{{ Request::is('servicios') ? 'active' : '' }}"><a style="color: #1c2533;">Servicios </a>
              <ul>
                <li class="{{ Request::is('servicios') ? 'active' : '' }}"><a href="{{route('servicios')}}">Nuestros Servicios</a>
                  <li class="{{ Request::is('servicios') ? 'active' : '' }}"><a href="{{route('promocionesyservicios')}}">Promociones</a>
                    <li class="{{ Request::is('servicios') ? 'active' : '' }}"><a href="{{route('promocionesyservicios')}}">Aseguradoras</a>
              </ul>
              </li>
              <li class="{{ Request::is('directorio') ? 'active' : '' }}"><a href="{{route('directorio')}}">Directorio</a></li>
              <li class="{{ Request::is('eventos') ? 'active' : '' }}"><a href="{{route('eventos')}}">Eventos</a></li>
              <li class="{{ Request::is('blog') ? 'active' : '' }}"><a href="{{route('blog')}}">Blog</a></li>
              <li class="{{ Request::is('bolsadetrabajo') ? 'active' : '' }}"><a href="{{route('bolsadetrabajo')}}">Bolsa de trabajo</a></li>
              <li class="{{ Request::is('contacto') ? 'active' : '' }}"><a href="{{route('contacto')}}">Contacto</a></li>
          </ul>
        </nav>
        <div class="header_extra d-flex flex-row align-items-center justify-content-end ml-auto">
          <!-- Appointment Button -->
          <!-- Hamburger -->
          <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
        </div>
      </div>
    </header>

    <!-- Menu -->

    <div class="menu_overlay trans_400"></div>
    <div class="menu trans_400">
      <div class="menu_close_container">
        <div class="menu_close">
          <div></div>
          <div></div>
        </div>
      </div>
      <nav class="menu_nav">
        <ul>
          <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{route('/')}}">Inicio</a></li>
          <li class="{{ Request::is('nosotros') ? 'active' : '' }}"><a href="{{route('nosotros')}}">Nosotros</a></li>
          <li class="submenu">
            <a href="#">Servicios <i class="fas fa-angle-down"></i></a>
            <ul class="children">
              <li class="{{ Request::is('servicios') ? 'active' : '' }}"><a href="{{route('servicios')}}">Nuestros Servicios</a>
                <li class="{{ Request::is('promocionesyservicios') ? 'active' : '' }}"><a href="{{route('promocionesyservicios')}}">Promociones</a>
                  <li class="{{ Request::is('promocionesyservicios') ? 'active' : '' }}"><a href="{{route('promocionesyservicios')}}">Aseguradoras</a>
            </ul>
            </li>
            <li class="{{ Request::is('directorio') ? 'active' : '' }}"><a href="{{route('directorio')}}">Directorio</a></li>
            <li class="{{ Request::is('eventos') ? 'active' : '' }}"><a href="{{route('eventos')}}">Eventos</a></li>
            <li class="{{ Request::is('blog') ? 'active' : '' }}"><a href="{{route('blog')}}">Noticias</a></li>
            <li class="{{ Request::is('bolsadetrabajo') ? 'active' : '' }}"><a href="{{route('bolsadetrabajo')}}">Bolsa de trabajo</a></li>
            <li class="{{ Request::is('contacto') ? 'active' : '' }}"><a href="{{route('contacto')}}">Contacto</a></li>

            <li class="submenu">
              <a href="#">Mas Servicios <i class="fas fa-angle-down"></i></a>
              <ul class="children">
                <li class="{{ Request::is('servicios') ? 'active' : '' }}"><a href="{{route('admin.dashboard')}}">Acceso medico</a>
                  <li class="{{ Request::is('promocionesyservicios') ? 'active' : '' }}"><a href="{{route('menulateral.preadmision')}}">Pre-admisión hospitalaria</a>
                   <li class="{{ Request::is('promocionesyservicios') ? 'active' : '' }}"><a href="{{route('buscarpaciente')}}">Laboratorio</a> 
                      <li class="{{ Request::is('promocionesyservicios') ? 'active' : '' }}"><a href="{{route('menulateral.rentaventaconsultorios')}}">Renta consultorio</a>
                        <li class="{{ Request::is('promocionesyservicios') ? 'active' : '' }}"> <a href="{{route('buscarpaciente')}}">Buscar paciente</a>

              </ul>
              </li>
        </ul>
      </nav>
      <div class="menu_extra">
      </div>
      <div class="social menu_social">
        <ul class="d-flex flex-row align-items-center justify-content-start">
          <li><a href="https://www.instagram.com/hospitalsanjosemoscati/"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
          <li><a href="https://twitter.com/HospitalMoscati"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="https://www.facebook.com/hospitalsanjosemoscati/"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
        </ul>
      </div>
    </div>
  </div>

  @yield('contenido')
  <div class="social-bar">
    <div class="social-bar__item social-bar__fb">
        <a href="{{route('admin.dashboard')}}" title=""><img src="/img/SitioPrincipal/icons/acceso-medico@3x.png" alt=""></a>
    </div>

    <div class="social-bar__item social-bar__fb">
      <a href="{{route('menulateral.hacercita')}}" title="Hacer cita"><img src="/img/SitioPrincipal/icons/hacer-cita@3x.png" alt=""></a>
    </div>

    <div class="social-bar__item social-bar__fb">
      <a href="{{route('menulateral.preadmision')}}" title="Pre-admisión hospitalaria"><img src="/img/SitioPrincipal/icons/pre-admision-hosp@3x.png" alt=""></a>
    </div>

    <div class="social-bar__item social-bar__fb">
      <!--<a href="{{route('buscarpaciente')}}" title="Laboratorio"><img src="/img/SitioPrincipal/icons/imageneologia-y-laboratorio@3x.png" alt=""></a> -->
    </div>

    <div class="social-bar__item social-bar__fb">
      <a href="{{route('menulateral.rentaventaconsultorios')}}" title="Renta consultorio"><img src="/img/SitioPrincipal/icons/renta-consult@3x.png" alt=""></a>
    </div>

    <div class="social-bar__item social-bar__fb">
      <!--<a href="{{route('buscarpaciente')}}" title="Buscar paciente"><img src="/img/SitioPrincipal/icons/buscador-paciente@3x.png" alt=""></a>-->
    </div>
  </div>

  <footer class="footer">
    <div style="background: rgb(0, 53, 148, 0.85)">
      <br>
      <div class="container">
        <div class="row">

          <!-- Footer About -->
          <div class="col-sm-4 footer_col">
            <div class="footer_about">
              <div class="footer_logo">
                <a href="#">
                  <div>Hospital<br><br>San José Moscati</div>
                  <div></div>
                </a>
              </div>
              <div class="footer_title">Síguenos en nuestras redes sociales</div>
              <div class="footer_about_text">
                <!-- Header Social -->
                <div class="social header_social">
                  <ul class="d-flex flex-row align-items-center justify-content-start">
                    <li><a href="https://www.instagram.com/hospitalsanjosemoscati/"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.facebook.com/hospitalsanjosemoscati/"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                    <li><a href="https://twitter.com/HospitalMoscati"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Footer Contact Info -->
          <div class="col-sm-4 footer_col">

            <div class="footer_contact">
              <div class="footer_title">Información de Contacto</div>
              <ul class="contact_list" style="color:#fff">
                <li>+52 442 325 9354</li>
                <li>+52 442-325 9360</li>
                <li>@correo.com</li>

              </ul>
            </div>
          </div>

          <!-- Footer Locations -->
          <div class="col-sm-4 footer_col">
            <div class="footer_contact">
              <div class="footer_title">Localización</div>
              <div class="location_text" style="color:#fff">Boulevard, Av. de las Ciencias 2058, Juriquilla, Qro.</div>
            </div>
          </div>
        </div>
      </div>
      <br>
    </div>

  </footer>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
    crossorigin="anonymous"></script>
  <script src="/js/funciones.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/debug.addIndicators.min.js"></script>

</body>

</html>