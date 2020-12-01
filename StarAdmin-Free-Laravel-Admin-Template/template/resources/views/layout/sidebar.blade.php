<nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile not-navigation-link">
      <div class="nav-link">
        <div class="user-wrapper">
          <div class="profile-image">
            <img src="{{ url('assets/images/faces/face8.jpg') }}" alt="profile image">
          </div>
          <div class="text-wrapper">
            <p class="profile-name">Richard V.Welsh</p>
            <div class="dropdown" data-display="static">
              <a href="#" class="nav-link d-flex user-switch-dropdown-toggler" id="UsersettingsDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <small class="designation text-muted">Manager</small>
                <span class="status-indicator online"></span>
              </a>
              <div class="dropdown-menu" aria-labelledby="UsersettingsDropdown">
                <a class="dropdown-item p-0">
                  <div class="d-flex border-bottom">
                    <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                      <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                    </div>
                    <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                      <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                    </div>
                    <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                      <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                    </div>
                  </div>
                </a>
                <a class="dropdown-item mt-2"> Manage Accounts </a>
                <a class="dropdown-item"> Change Password </a>
                <a class="dropdown-item"> Check Inbox </a>
                <a class="dropdown-item"> Sign Out </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </li>
    <li class="nav-item {{ active_class(['/dashboard']) }}">
      <a class="nav-link" href="{{ url('/dashboard') }}">
        <i class="menu-icon mdi mdi-television"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item {{ active_class(['tables/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="{{ is_active_route(['tables/*']) }}" aria-controls="tables">
        <i class="menu-icon mdi mdi-table-large"></i>
        <span class="menu-title">Tablas</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['tables/*']) }}" id="tables">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['tables/aspirantes']) }}">
            <a class="nav-link" href="{{ url('/tables/aspirantes') }}">
              <i class="menu-icon mdi mdi-account"></i>
              <span class="menu-title">Aspirantes</span>
            </a>
          </li>
          <li class="nav-item {{ active_class(['tables/casos']) }}">
            <a class="nav-link" href="{{ url('/tables/casos') }}">
              <i class="menu-icon mdi mdi-account-star"></i>
              <span class="menu-title">Casos Especiales</span>
            </a>
          </li>
          <li class="nav-item {{ active_class(['tables/convalidaciones']) }}">
            <a class="nav-link" href="{{ url('/tables/convalidaciones') }}">
              <i class="menu-icon mdi mdi-account-check"></i>
              <span class="menu-title">Convalidaciones</span>
            </a>
          </li>
          <li class="nav-item {{ active_class(['tables/eventos']) }}">
            <a class="nav-link" href="{{ url('/tables/eventos') }}">
              <i class="menu-icon mdi mdi-calendar-today"></i>
              <span class="menu-title">Eventos</span>
            </a>
          </li>
          <li class="nav-item {{ active_class(['tables/examenes']) }}">
            <a class="nav-link" href="{{ url('/tables/examenes') }}">
              <i class="menu-icon mdi  mdi-certificate"></i>
              <span class="menu-title">Exámenes</span>
            </a>
          </li>
          <li class="nav-item {{ active_class(['tables/inscripciones']) }}">
            <a class="nav-link" href="{{ url('/tables/inscripciones') }}">
              <i class="menu-icon mdi mdi-book-multiple"></i>
              <span class="menu-title">Inscripciones</span>
            </a>
          </li>
          <li class="nav-item {{ active_class(['tables/jueces']) }}">
            <a class="nav-link" href="{{ url('/tables/jueces') }}">
              <i class="menu-icon mdi mdi-clipboard-account"></i>
              <span class="menu-title">Jueces</span>
            </a>
          </li>
          <li class="nav-item {{ active_class(['tables/requisitos']) }}">
            <a class="nav-link" href="{{ url('/tables/requisitos') }}">
              <i class="menu-icon mdi mdi-book-open-variant"></i>
              <span class="menu-title">Requisitos Administrativos</span>
            </a>
          </li>
          <li class="nav-item {{ active_class(['tables/tribunales']) }}">
            <a class="nav-link" href="{{ url('/tables/tribunales') }}">
              <i class="menu-icon mdi mdi-sitemap"></i>
              <span class="menu-title">Tribunales</span>
            </a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item {{ active_class(['user-pages/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#user-pages" aria-expanded="{{ is_active_route(['user-pages/*']) }}" aria-controls="user-pages">
        <i class="menu-icon mdi mdi-lock-outline"></i>
        <span class="menu-title">User Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['user-pages/*']) }}" id="user-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['user-pages/login']) }}">
            <a class="nav-link" href="{{ url('/user-pages/login') }}">Login</a>
          </li>
          <li class="nav-item {{ active_class(['user-pages/register']) }}">
            <a class="nav-link" href="{{ url('/user-pages/register') }}">Register</a>
          </li>
        </ul>
      </div>
    </li>
  </ul>
</nav>