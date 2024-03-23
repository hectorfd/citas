<li class="nav-item pb-2 {{ Request::is('horario') ? 'active' : '' }}">
    <a class="nav-link h {{ Request::is('horario') ? 'active' : '' }}" href="{{ url('/horario') }}">
      <i class="ni ni-calendar-grid-58 text-primary"></i> Gestionar Horario
    </a>
  </li>
  <li class="nav-item pb-2 {{ Request::is('miscitas') ? 'active' : '' }}">
    <a class="nav-link h {{ Request::is('miscitas') ? 'active' : '' }}" href="{{ url('/miscitas') }}">
      <i class="fas fa-clock text-info"></i> Mis Citas
    </a>
  </li>
  {{-- <li class="nav-item pb-2 {{ Request::is('pacientes') ? 'active' : '' }}">
    <a class="nav-link h {{ Request::is('pacientes') ? 'active' : '' }}" href="{{ url('/pacientes') }}">
      <i class="fas fa-bed text-danger"></i> Mis Pacientes
    </a>
  </li> --}}