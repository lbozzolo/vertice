<header class="main-header">




    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
            <a class="navbar-brand brand-logo" href="{{ route('admin') }}">
                <img src="{{ asset('template-web/images/icons/logo_amghi.png') }}" alt="logo" class="img-responsive" />
            </a>
            <a class="navbar-brand brand-logo-mini" href="{{ route('home') }}">
                <img src="{{ asset('template-web/images/logo-a-amghi.png') }}" alt="logo" />
            </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
            <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                <li class="nav-item">
                    <a href="web" target="_blank" class="nav-link">
                        <i class="mdi mdi-web"></i>WebSite</a>
                </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">

                <li class="nav-item dropdown d-none d-xl-inline-block">
                    <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                        <span class="profile-text">{!! Auth::user()->full_name !!}</span>
                        <img class="img-xs rounded-circle" src="{{ asset('template-web/images/icons/favicon.png') }}" alt="Profile image">
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









    {{--<!-- Logo -->--}}
    {{--<a href="#" class="logo">--}}
        {{--<b>AMGHI</b>--}}
    {{--</a>--}}

    {{--<!-- Header Navbar -->--}}
    {{--<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row" role="navigation">--}}
        {{--<!-- Sidebar toggle button-->--}}
        {{--<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">--}}
            {{--<span class="sr-only">Toggle navigation</span>--}}
        {{--</a>--}}

        {{--<!-- Navbar Right Menu -->--}}
        {{--<div class="navbar-custom-menu">--}}
            {{--<ul class="nav navbar-nav">--}}
                {{--<!-- User Account Menu -->--}}
                {{--<li><a href="web" style="color: cyan">web</a></li>--}}
                {{--<li class="dropdown user user-menu">--}}
                    {{--<!-- Menu Toggle Button -->--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
                        {{--<!-- The user image in the navbar-->--}}
                        {{--<img src="{{ asset('template-web/images/logo-a-amghi.png') }}"--}}
                             {{--class="user-image" alt="User Image"/>--}}
                        {{--<!-- hidden-xs hides the username on small devices so only the image appears. -->--}}
                        {{--<span class="hidden-xs">{!! (Auth::check())? Auth::user()->name : '' !!}</span>--}}
                    {{--</a>--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--<!-- The user image in the menu -->--}}
                        {{--<li class="user-header">--}}
                            {{--<img src="{{ asset('template-web/images/logo-a-amghi.png') }}"--}}
                                 {{--class="img-circle" alt="User Image"/>--}}
                            {{--<p>--}}
                                {{--{!! (Auth::check())? Auth::user()->name : '' !!}--}}
                                {{--<small>Miembro desde {!! (Auth::check())? Auth::user()->created_at->format('M. Y') : '' !!}</small>--}}
                            {{--</p>--}}
                        {{--</li>--}}
                        {{--<!-- Menu Footer-->--}}
                        {{--<li class="user-footer">--}}
                            {{--<div class="pull-right">--}}
                                {{--<a href="{!! url('/logout') !!}" class="btn btn-default btn-flat"--}}
                                   {{--onclick="event.preventDefault(); document.getElementById('logout-form').submit();">--}}
                                    {{--Cerrar sesión--}}
                                {{--</a>--}}
                                {{--<form id="logout-form" action="{{ url('/logout') }}" method="POST"--}}
                                      {{--style="display: none;">--}}
                                    {{--{{ csrf_field() }}--}}
                                {{--</form>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</nav>--}}


</header>