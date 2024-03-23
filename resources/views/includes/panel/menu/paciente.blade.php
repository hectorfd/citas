<li class="nav-item pb-2 {{ Request::is('reservarcitas') ? 'active' : '' }}">
    <a class="nav-link h {{ Request::is('reservarcitas') ? 'active' : '' }}" href="{{ url('/reservarcitas/create') }}">
      <i class="ni ni-calendar-grid-58 text-primary"></i> Reservar cita
    </a>
  </li>
  <li class="nav-item pb-2 {{ Request::is('miscitas') ? 'active' : '' }}">
    <a class="nav-link h {{ Request::is('miscitas') ? 'active' : '' }}" href="{{ url('/miscitas') }}">
      <i class="fas fa-clock text-info"></i> Mis Citas
    </a>
  </li>