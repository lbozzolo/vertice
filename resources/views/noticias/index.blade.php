@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-body">

            <h1>
                Noticias
                <a class="btn btn-primary btn-sm" href="{!! route('noticias.create') !!}">Agregar</a>
            </h1>

            @if($noticias->count())
            <div class="table-responsive">
                @include('noticias.table')
            </div>
            @else
                <span class="text-muted">No hay ninguna noticia cargada en el sistema.</span>
            @endif

        </div>
    </div>

@endsection
