<div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
    <div class=" dropdown-header noti-title">
        <h6 class="text-overflow m-0">Bienvenido!</h6>
    </div>
    <a href="{{ url('/profile') }}" class="dropdown-item">
        <i class="ni ni-single-02"></i>
        <span>Mi Perfil</span>
    </a>
    <a href="/miscitas" class="dropdown-item">
        <i class="far fa-clock"></i>
        <span>Mis Citas</span>
    </a>
    <a href="/reservarcitas/create" class="dropdown-item">
        <i class="ni ni-calendar-grid-58"></i>
        <span>Reservar Cita</span>
    </a>
    {{-- <a href="#" class="dropdown-item">
        <i class="ni ni-support-16"></i>
        <span>Ayuda</span>
    </a> --}}
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('formLogout').submit();">
        <i class="ni ni-user-run"></i>
        <span>Cerrar Sesión</span>
        <form action="{{route('logout')}}" method="POST" style="display: none" id="formLogout">
            @csrf
        </form>
    </a>
</div>