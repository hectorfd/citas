<h6 class="navbar-heading text-muted">Gestion</h6>
<ul class="navbar-nav">
    <li class="nav-item  active ">
      <a class="nav-link  active " href="#">
        <i class="ni ni-tv-2 text-danger"></i> Panel de control
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="{{url('/especialidades')}}">
        <i class="ni ni-briefcase-24 text-blue"></i> Especialidades
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="#">
        <i class="fas fa-stethoscope text-info"></i> Médicos
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="#">
        <i class="fas fa-bed text-warning"></i> Pacientes
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('formLogout').submit();">
        <i class="ni ni-button-power text-pink"></i> Cerrar Sesión
      </a>
      <form action="{{route('logout')}}" method="POST" style="display: none" id="formLogout">
        @csrf
    </form>
    </li>
  </ul>
  <!-- Divider -->
  <hr class="my-3">
  <!-- Heading -->
  <h6 class="navbar-heading text-muted">Reportes</h6>
  <!-- Navigation -->
  <ul class="navbar-nav mb-md-3">
    <li class="nav-item">
      <a class="nav-link" href="#">
        <i class="ni ni-books text-default"></i> Citas
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html">
        <i class="ni ni-chart-bar-32 text-warning"></i> Desempeño medico
      </a>
    </li>
  </ul>
 