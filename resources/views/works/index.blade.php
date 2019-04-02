@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-body">

            <h1>
                Trabajos
                <a class="btn btn-primary btn-sm" href="{!! route('works.create') !!}">Agregar</a>
            </h1>

        </div>
    </div>
    <div class="card mt-2">
        <div class="card-body">
            @if($works->count())
                <div class="table-responsive">
                    @include('works.table')
                </div>
            @else
                <span class="text-muted">No hay ningún trabajo cargado en el sistema.</span>
            @endif
        </div>
    </div>

@endsection
