<h6 class="navbar-heading text-muted">
  @if(auth()->user()->role == 'admin')
        Gestión
    @else
        Menú
    @endif  
</h6>
<ul class="navbar-nav">
  
  @include('includes.panel.menu.'.auth()->user()->role)

    <li class="nav-item pb-2 ">
      <a class="nav-link h {{ Request::is('#') ? 'active' : '' }}" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('formLogout').submit();">
        <i class="ni ni-button-power text-pink"></i> Cerrar Sesión
      </a>
      <form action="{{route('logout')}}" method="POST" style="display: none" id="formLogout">
        @csrf
    </form>
    </li>
  </ul>
  @if(auth()->user()->role == 'admin')
  <!-- Divider -->
  <hr class="my-3">
  <!-- Heading -->
  <h6 class="navbar-heading text-muted">Reportes</h6>
  <!-- Navigation -->
  <ul class="navbar-nav mb-md-3">
    <li class="nav-item pb-2 {{ Request::is('reportes/citas/line') ? 'active' : '' }}">
      <a class="nav-link h {{ Request::is('reportes/citas/line') ? 'active' : '' }}" href="{{ url('/reportes/citas/line') }}">
        <i class="ni ni-books text-success"></i> Citas
      </a>
    </li>
    <li class="nav-item pb-2 {{ Request::is('reportes/doctors/column') ? 'active' : '' }}">
      <a class="nav-link h {{ Request::is('reportes/doctors/column') ? 'active' : '' }}" href="{{ url('/reportes/doctors/column') }}">
        <i class="ni ni-chart-bar-32 text-warning"></i> Desempeño medico
      </a>
    </li>
  </ul>
  @endif
 