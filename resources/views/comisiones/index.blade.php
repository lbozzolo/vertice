@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-body">

            <h1>
                Comisiones
                <a class="btn btn-primary btn-sm" href="{!! route('comisiones.create') !!}">Agregar</a>
            </h1>

            @if($comisiones->count())
            <div class="table-responsive">
                @include('comisiones.table')
            </div>
            @else
                <span class="text-muted">No hay ninguna comisión cargada en el sistema.</span>
            @endif

        </div>
    </div>

@endsection

