<!-- AQUI ES DONDE VAN LOS MODULOS, ES LA BARRA DEL LADO IZQUIERDO -->

<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="" class="simple-text logo-normal">
      {{ __('PERFIL LABORAL') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
          <p>{{ __('Inicio') }}</p>
        </a>
      </li>

      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i><img style="width:40px" src="{{ asset('material') }}/img/Captura1.jpg"></i>
          <p>{{ __('Gestión del sistema.') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            
            <h6 class="nav-link">Gestión de usuarios:</h6>
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> PU </span>
                <span class="sidebar-normal">{{ __('Perfil de usuario') }} </span>
              </a>
            </li>
            @if (!Auth::user()->hasRole("est"))
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> GU </span>
                <span class="sidebar-normal"> {{ __('Gestión de usuarios') }} </span>
              </a>
            </li>

            <li class="nav-item{{ $activePage == 'gestion-estudiantes' ? ' active' : '' }}">
              <h6 class="nav-link">Gestión de modulos:</h6>
              <a class="nav-link" href="{{ route('gestion-estudiantes') }}">
                <i class="material-icons">content_paste</i>
                <p>{{ __('Gestión de estudiantes') }}</p>
              </a>
            </li>

            <li class="nav-item{{ $activePage == 'gestion-empresas' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('company.index') }}">
                <i class="material-icons">library_books</i>
                <p>{{ __('Gestión de empresas') }}</p>
              </a>
            </li>
            @endif
          </ul>
        </div>
      </li>
    </ul>
  </div>
</div>