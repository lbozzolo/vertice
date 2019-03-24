@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-body">

            <h1>Médicos</h1>

            @if($medicos->count())
            <div class="table-responsive">
                @include('medicos.table')
            </div>
            @else
                <span class="text-muted">No hay ningún médico cargado en el sistema.</span>
            @endif

        </div>
    </div>

@endsection

