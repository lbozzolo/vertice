@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-body">
            <h1>
                Médico /
                <span class="text-warning">Detalles</span>
            </h1>
            <div class="card-body">

                @include('medicos.show_fields')

            </div>
        </div>
    </div>

@endsection