@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-body">

            <h1>
                Estatutos
                <a class="btn btn-primary btn-sm" href="{!! route('estatutos.create') !!}">Agregar</a>
            </h1>

            @if($estatutos->count())
            <div class="table-responsive">
                @include('estatutos.table')
            </div>
            @else
                <span class="text-muted">No hay ningún estatuto cargado en el sistema.</span>
            @endif

        </div>
    </div>

@endsection

