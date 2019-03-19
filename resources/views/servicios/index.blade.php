@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-body">

            <h1>
                Servicios
                <a class="btn btn-primary btn-sm" href="{!! route('servicios.create') !!}">Agregar</a>
            </h1>

            @if($servicios->count())
            <div class="table-responsive">
                @include('servicios.table')
            </div>
            @else
            <span class="text-muted">No hay ningún servicio cargado en el sistema.</span>
            @endif

        </div>
    </div>

@endsection

