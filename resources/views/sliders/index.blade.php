@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-body">

            <h1>
                Sliders
                <a class="btn btn-primary btn-sm" href="{!! route('sliders.create') !!}">Agregar</a>
            </h1>

            @if($sliders->count())
            <div class="table-responsive">
                @include('sliders.table')
            </div>
            @else
                <span class="text-muted">No hay ningún slider cargado en el sistema.</span>
            @endif

        </div>
    </div>

@endsection

