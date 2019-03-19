@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-body">

            <h1>
                Categorías
                <a class="btn btn-primary btn-sm" href="{!! route('categorias.create') !!}">Agregar</a>
            </h1>

            @if($categorias->count())
            <div class="table-responsive">
                @include('categorias.table')
            </div>
            @else
                <span class="text-muted">No hay ninguna categoría cargada en el sistema.</span>
            @endif

        </div>
    </div>

@endsection

