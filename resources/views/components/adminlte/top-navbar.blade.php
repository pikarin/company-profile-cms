<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    {{-- Left navbar links --}}
    <ul class="navbar-nav">
        <x-adminlte.sidebar-toggler />

        {{-- Configured left links --}}
        @each('adminlte::partials.navbar.menu-item', config('admin.navbar-left', []), 'item')

        {{-- Custom left links --}}
        @yield('content_top_nav_left')
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        {{-- <x-adminlte.menu-item-dropdown-user-menu /> --}}
        <li class="nav-item">
            <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa fa-fw fa-power-off"></i>
                {{ __('Logout') }}
            </a>
            <form id="logout-form" class="d-none" action="{{ route('logout') }}" method="POST">
                {{ csrf_field() }}
            </form>
        </li>
    </ul>
  </nav>
  <!-- /.navbar -->
