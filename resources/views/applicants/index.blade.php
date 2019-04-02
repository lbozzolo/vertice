@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-body">

            <h1>
                Aspirantes
                <a class="btn btn-primary btn-sm" href="{!! route('applicants.create') !!}">Agregar</a>
            </h1>

        </div>
    </div>

    <div class="card mt-2">
        <div class="card-body">

            @if($applicants->count())
                <div class="table-responsive">
                    @include('applicants.table')
                </div>
            @else
                <span class="text-muted">No hay ningún aspirante cargado en el sistema.</span>
            @endif

        </div>
    </div>

@endsection

