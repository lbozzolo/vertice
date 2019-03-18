<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">

        {{--@if(Auth::check() && Auth::user()->isSuperAdmin())--}}
            {{--<li class="nav-item">--}}
                {{--<a href="generator_builder" class="nav-link">--}}
                    {{--<i class="fa fa-building-o"></i>--}}
                    {{--<span class="menu-title">Generator Builder</span>--}}
                {{--</a>--}}
            {{--</li>--}}
        {{--@endif--}}


        <li class="{{ Request::is('usuarios*') ? 'active' : '' }} nav-item">
            <a href="{!! route('users.index') !!}" class="nav-link">
                <i class="fa fa-edit"></i>
                <span class="menu-title">Usuarios</span>
            </a>
        </li>

        <li class="{{ Request::is('estatutos*') ? 'active' : '' }} nav-item">
            <a href="{!! route('estatutos.index') !!}" class="nav-link">
                <i class="fa fa-edit"></i>
                <span class="menu-title">Estatutos</span>
            </a>
        </li>

        <li class="{{ Request::is('comisiones*') ? 'active' : '' }} nav-item">
            <a href="{!! route('comisiones.index') !!}" class="nav-link">
                <i class="fa fa-edit"></i>
                <span class="menu-title">Comisiones</span>
            </a>
        </li>

        <li class="{{ Request::is('noticias*') ? 'active' : '' }} nav-item">
            <a href="{!! route('noticias.index') !!}" class="nav-link">
                <i class="fa fa-edit"></i>
                <span class="menu-title">Noticias</span>
            </a>
        </li>

        <li class="{{ Request::is('servicios*') ? 'active' : '' }} nav-item">
            <a href="{!! route('servicios.index') !!}" class="nav-link">
                <i class="fa fa-edit"></i>
                <span class="menu-title">Servicios</span>
            </a>
        </li>

        <li class="{{ Request::is('categorias*') ? 'active' : '' }} nav-item">
            <a href="{!! route('categorias.index') !!}" class="nav-link">
                <i class="fa fa-edit"></i>
                <span class="menu-title">Categorias</span>
            </a>
        </li>

        <li class="{{ Request::is('sliders*') ? 'active' : '' }} nav-item">
            <a href="{!! route('sliders.index') !!}" class="nav-link">
                <i class="fa fa-edit"></i>
                <span class="menu-title">Sliders</span>
            </a>
        </li>


    </ul>
</nav>











{{--<aside class="main-sidebar" id="sidebar-wrapper">--}}

    {{--<section class="sidebar">--}}

        {{--<div class="user-panel">--}}
            {{--<div class="pull-left image">--}}
                {{--<img src="{{ asset('template-web/images/logo-a-amghi.png') }}" class="img-circle" alt="User Image"/>--}}
            {{--</div>--}}
            {{--<div class="pull-left info">--}}
                {{--@if (Auth::guest())--}}
                    {{--<p>AMGHI</p>--}}
                {{--@else--}}
                    {{--<p>{{ Auth::user()->name}}</p>--}}
                {{--@endif--}}

                {{--<a href="#"><i class="fa fa-circle text-success"></i> En línea</a>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<ul class="sidebar-menu">--}}


            {{--@if(Auth::check() && Auth::user()->isSuperAdmin())--}}
                {{--<li>--}}
                    {{--<a href="generator_builder">--}}
                        {{--<i class="fa fa-building-o"></i>--}}
                        {{--<span>Generator Builder</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
            {{--@endif--}}


            {{--<li class="{{ Request::is('usuarios*') ? 'active' : '' }}">--}}
                {{--<a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Usuarios</span></a>--}}
            {{--</li>--}}
            {{--<li class="{{ Request::is('estatutos*') ? 'active' : '' }}">--}}
                {{--<a href="{!! route('estatutos.index') !!}"><i class="fa fa-edit"></i><span>Estatutos</span></a>--}}
            {{--</li>--}}

            {{--<li class="{{ Request::is('noticias*') ? 'active' : '' }}">--}}
                {{--<a href="{!! route('noticias.index') !!}"><i class="fa fa-edit"></i><span>Noticias</span></a>--}}
            {{--</li>--}}

            {{--<li class="{{ Request::is('servicios*') ? 'active' : '' }}">--}}
                {{--<a href="{!! route('servicios.index') !!}"><i class="fa fa-edit"></i><span>Servicios</span></a>--}}
            {{--</li>--}}

            {{--@if(Auth::check() && Auth::user()->isSuperAdmin())--}}
                {{--<li class="{{ Request::is('images*') ? 'active' : '' }}">--}}
                    {{--<a href="{!! route('images.index') !!}"><i class="fa fa-edit"></i><span>Imágenes</span></a>--}}
                {{--</li>--}}
            {{--@endif--}}

            {{--<li class="{{ Request::is('categorias*') ? 'active' : '' }}">--}}
                {{--<a href="{!! route('categorias.index') !!}"><i class="fa fa-edit"></i><span>Categorias</span></a>--}}
            {{--</li>--}}

            {{--<li class="{{ Request::is('sliders*') ? 'active' : '' }}">--}}
                {{--<a href="{!! route('sliders.index') !!}"><i class="fa fa-edit"></i><span>Sliders</span></a>--}}
            {{--</li>--}}


        {{--</ul>--}}

    {{--</section>--}}

{{--</aside>--}}