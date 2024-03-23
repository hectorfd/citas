<li class="nav-item pb-2 {{ Request::is('home') ? 'active' : '' }}">
    <a class="nav-link  h {{ Request::is('home') ? 'active' : '' }}" href="{{ url('/home') }}">
        <i class="ni ni-tv-2 text-danger"></i> Panel de control
    </a>
  </li>
  <li class="nav-item pb-2 {{ Request::is('especialidades') ? 'active' : '' }}">
      <a class="nav-link h {{ Request::is('especialidades') ? 'active' : '' }}" href="{{ url('/especialidades') }}">
          <i class="ni ni-briefcase-24 text-blue"></i> Especialidades 
      </a>
  </li>
  <li class="nav-item pb-2 {{ Request::is('medicos') ? 'active' : '' }}">
    <a class="nav-link h {{ Request::is('medicos') ? 'active' : '' }}" href="{{ url('/medicos') }}">
      <i class="fas fa-stethoscope text-info"></i>  Médicos
    </a>
  </li>
  <li class="nav-item pb-2 {{ Request::is('pacientes') ? 'active' : '' }}">
    <a class="nav-link h {{ Request::is('pacientes') ? 'active' : '' }}" href="{{ url('/pacientes') }}">
      <i class="fas fa-bed text-warning"></i> Pacientes
    </a>
  </li>
  <li class="nav-item pb-2 {{ Request::is('miscitas') ? 'active' : '' }}">
    <a class="nav-link h {{ Request::is('miscitas') ? 'active' : '' }}" href="{{ url('/miscitas') }}">
      <i class="fas fa-clock text-info"></i> Citas Medicas
    </a>
  </li>