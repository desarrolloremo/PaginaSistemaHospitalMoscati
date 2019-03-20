
<ul class="sidebar-menu tree" data-widget="tree">
  <li class="header">Administrador</li>
    {{-- class="treeview active" --}}
    <li class="{{ Request::is('admin') ? 'active' : ''}}"><a href="{{route('admin.dashboard')}}"><i class="fa fa-home"></i><span>Inicio</span></a></li>
    <li><a href="#"><i class="fa fa-user"></i><span>Administrar usuarios</span></a></li>
    <li class="{{ Request::is('admin/bolsadetrabajo') ? 'active' : ''}}"><a href="{{route('admin.bolsadetrabajo.vertrabajo')}}"><i class="fa fa-briefcase"></i><span>Bolsa de trabajo</span></a></li>
    <li class="{{ Request::is('admin/directorio') ? 'active' : ''}}"><a href="{{route('admin.directoriomedico.verdirectorio')}}"><i class="fa fa-user-md"></i><span>Directorio Doctores</span></a></li>

    <li class="treeview {{ Request::is('admin/posts*') ? 'active' : ''}}">
      <a href="#">
        <i class="fa fa-blog"></i> <span>Blog</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
          <li><a href="{{route('admin.blognoticias.verposts')}}"><i class="fa fa-blog"></i>  Ver todos los posts</a></li>
          <li><a href="#" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-blog"></i>  Crear un nuevo posts</a></li>
      </ul>
    </li>
    <li class="treeview {{ Request::is('admin/eventos*') ? 'active' : ''}}">
      <a href="#">
        <i class="far fa-newspaper"></i></i> <span> Eventos</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
          <li><a  href="{{route('admin.eventos.vereventos')}}"><i class="far fa-newspaper"></i>  Ver todos las eventos</a></li>
          <li><a  href="{{route('admin.eventos.creareventos')}}"><i class="fa fa-newspaper"></i>  Crear un nuevo evento</a></li>
      </ul>
    </li>
    <li class="{{ Request::is('admin/buscarpacientes') ? 'active' : ''}}"><a href="{{route('admin.buscarpacientes.verpacientes')}}"><i class="fa fa-user-md"></i><span>Buscar Paciente</span></a></li>

    {{-- 
      *
      *   Area de medicos
      *
      --}}
    <li class="header">Area Medicos</li>

    <li class="{{ Request::is('medico') ? 'active' : ''}}"><a href=""><i class="fa fa-home"></i><span>Inicio</span></a></li>
    <li class="{{ Request::is('medico') ? 'active' : ''}}"><a href=""><i class="fa fa-home"></i><span>Aparta quirofano</span></a></li>
    <li class="{{ Request::is('medico') ? 'active' : ''}}"><a href=""><i class="fa fa-home"></i><span>Aparta aula</span></a></li>

  </ul>