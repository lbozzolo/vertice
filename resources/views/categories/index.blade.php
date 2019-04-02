@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-body">

            <h1>
                Categorías
                <a class="btn btn-primary btn-sm" href="{!! route('categories.create') !!}">Agregar</a>
            </h1>

        </div>
    </div>
    <div class="card mt-2">
        <div class="card-body">

            @if($categories->count())
                <div class="table-responsive">
                    @include('categories.table')
                </div>
            @else
                <span class="text-muted">No hay ninguna categoría cargada en el sistema.</span>
            @endif

        </div>
    </div>

@endsection

