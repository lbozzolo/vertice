<header class="main-header">




    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
            <a class="navbar-brand brand-logo" href="{{ route('admin') }}">
                <img src="{{ asset('images/logos/logo2.png') }}" alt="logo" class="img-responsive" style="max-width: 80px"/>
            </a>
            <a class="navbar-brand brand-logo-mini" href="{{ route('home') }}">
                <img src="{{ asset('images/logos/favicon.png') }}" alt="logo" />
            </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
            @if(!Auth::user()->isMedico())
                <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                    <li class="nav-item">
                        <a href="{{ asset('web/home') }}" target="_blank" class="nav-link">
                            <i class="mdi mdi-web"></i>WebSite
                        </a>
                    </li>
                </ul>
            @else
                <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                    <li class="{{ Request::is('liquidaciones*') ? 'active' : '' }} nav-item">
                        <a href="{!! route('liquidaciones.index') !!}" class="nav-link">
                            <i class="mdi mdi-library-books menu-icon"></i>
                            <span class="menu-title">Liquidaciones</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('resumenes-mensuales') ? 'active' : '' }} nav-item">
                        <a href="{!! route('liquidaciones.resumenes.mensuales') !!}" class="nav-link">
                            <i class="mdi mdi-calendar menu-icon"></i>
                            <span class="menu-title">Resúmenes mensuales</span>
                        </a>
                    </li>
                </ul>
            @endif
            <ul class="navbar-nav navbar-nav-right">

                <li class="nav-item dropdown d-none d-xl-inline-block">
                    <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                        <span class="profile-text">{!! Auth::user()->full_name !!}</span>
                        <img class="img-xs rounded-circle" src="{{ asset('images/logos/logo-n.png') }}" alt="Profile image">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">


                        <!-- Authentication Links -->
                        @guest
                            <a href="{{ route('login') }}">Login</a>
                            <a href="{{ route('register') }}">Register</a>
                        @else

                            <a  class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                <i class="mdi mdi-exit-to-app"></i>
                                Cerrar sesión
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>

                        @endguest

                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>

</header>