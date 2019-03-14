@if(Auth::check() && Auth::user()->isSuperAdmin())
<li>
    <a href="generator_builder">
        <i class="fa fa-building-o"></i>
        <span>Generator Builder</span>
    </a>
</li>
@endif


<li class="{{ Request::is('usuarios*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Usuarios</span></a>
</li>
<li class="{{ Request::is('estatutos*') ? 'active' : '' }}">
    <a href="{!! route('estatutos.index') !!}"><i class="fa fa-edit"></i><span>Estatutos</span></a>
</li>

<li class="{{ Request::is('noticias*') ? 'active' : '' }}">
    <a href="{!! route('noticias.index') !!}"><i class="fa fa-edit"></i><span>Noticias</span></a>
</li>

<li class="{{ Request::is('servicios*') ? 'active' : '' }}">
    <a href="{!! route('servicios.index') !!}"><i class="fa fa-edit"></i><span>Servicios</span></a>
</li>

@if(Auth::check() && Auth::user()->isSuperAdmin())
<li class="{{ Request::is('images*') ? 'active' : '' }}">
    <a href="{!! route('images.index') !!}"><i class="fa fa-edit"></i><span>Imágenes</span></a>
</li>
@endif

<li class="{{ Request::is('categorias*') ? 'active' : '' }}">
    <a href="{!! route('categorias.index') !!}"><i class="fa fa-edit"></i><span>Categorias</span></a>
</li>

<li class="{{ Request::is('sliders*') ? 'active' : '' }}">
    <a href="{!! route('sliders.index') !!}"><i class="fa fa-edit"></i><span>Sliders</span></a>
</li>