@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-body">

            <h1>
                Servicios
                <a class="btn btn-primary btn-sm" href="{!! route('servicios.create') !!}">Agregar</a>
            </h1>

            <div class="table-responsive">
                @include('servicios.table')
            </div>

        </div>
    </div>

@endsection

