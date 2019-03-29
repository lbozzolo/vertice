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
                <i class="mdi mdi-account-multiple menu-icon"></i>
                <span >Usuarios</span>
            </a>
        </li>

        <li class="{{ Request::is('trabajos*') ? 'active' : '' }} nav-item">
            <a href="{!! route('works.index') !!}" class="nav-link">
                <i class="mdi mdi-receipt menu-icon"></i>
                <span class="menu-title">Works</span>
            </a>
        </li>

        <li class="{{ Request::is('aspirantes*') ? 'active' : '' }} nav-item">
            <a href="{!! route('applicants.index') !!}" class="nav-link">
                <i class="mdi mdi-checkerboard menu-icon"></i>
                <span class="menu-title">Aspirantes</span>
            </a>
        </li>

        <li class="{{ Request::is('imagenes*') ? 'active' : '' }} nav-item">
            <a href="{!! route('images.index') !!}" class="nav-link">
                <i class="mdi mdi-newspaper menu-icon"></i>
                <span class="menu-title">Noticias</span>
            </a>
        </li>

        <li class="{{ Request::is('categorias*') ? 'active' : '' }} nav-item">
            <a href="{!! route('categories.index') !!}" class="nav-link">
                <i class="mdi mdi-cloud-tags menu-icon"></i>
                <span class="menu-title">Categorias</span>
            </a>
        </li>

        <li class="{{ Request::is('sliders*') ? 'active' : '' }} nav-item">
            <a href="{!! route('sliders.index') !!}" class="nav-link">
                <i class="mdi mdi-folder-multiple-image menu-icon"></i>
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

            {{--<li class="{{ Request::is('applicants*') ? 'active' : '' }}">--}}
                {{--<a href="{!! route('applicants.index') !!}"><i class="fa fa-edit"></i><span>Servicios</span></a>--}}
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