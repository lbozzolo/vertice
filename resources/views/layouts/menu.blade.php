@if(Auth::user()->isAdmin())
<li>
    <a href="generator_builder">
        <i class="fa fa-building-o"></i>
        <span>Generator Builder</span>
    </a>
</li>
@endif
<li class="{{ Request::is('empresas*') ? 'active' : '' }}">
    <a href="{!! route('empresas.index') !!}"><i class="fa fa-edit"></i><span>Empresas</span></a>
</li>

<li class="{{ Request::is('servicios*') ? 'active' : '' }}">
    <a href="{!! route('servicios.index') !!}"><i class="fa fa-edit"></i><span>Servicios</span></a>
</li>

<li class="{{ Request::is('proyectos*') ? 'active' : '' }}">
    <a href="{!! route('proyectos.index') !!}"><i class="fa fa-edit"></i><span>Proyectos</span></a>
</li>

<li class="{{ Request::is('eventos*') ? 'active' : '' }}">
    <a href="{!! route('eventos.index') !!}"><i class="fa fa-edit"></i><span>Eventos</span></a>
</li>

<li class="{{ Request::is('insumos*') ? 'active' : '' }}">
    <a href="{!! route('insumos.index') !!}"><i class="fa fa-edit"></i><span>Insumos</span></a>
</li>

<li class="{{ Request::is('colors*') ? 'active' : '' }}">
    <a href="{!! route('colors.index') !!}"><i class="fa fa-edit"></i><span>Colors</span></a>
</li>

<li class="{{ Request::is('images*') ? 'active' : '' }}">
    <a href="{!! route('images.index') !!}"><i class="fa fa-edit"></i><span>Images</span></a>
</li>

<li class="{{ Request::is('categorias*') ? 'active' : '' }}">
    <a href="{!! route('categorias.index') !!}"><i class="fa fa-edit"></i><span>Categorias</span></a>
</li>

<li class="{{ Request::is('categoriables*') ? 'active' : '' }}">
    <a href="{!! route('categoriables.index') !!}"><i class="fa fa-edit"></i><span>Categoriables</span></a>
</li>

<li class="{{ Request::is('sliders*') ? 'active' : '' }}">
    <a href="{!! route('sliders.index') !!}"><i class="fa fa-edit"></i><span>Sliders</span></a>
</li>