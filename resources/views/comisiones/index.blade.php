@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-body">

            <h1>
                Comisiones
                <a class="btn btn-primary btn-sm" href="{!! route('comisiones.create') !!}">Agregar</a>
            </h1>

            <div class="table-responsive">
                @include('comisiones.table')
            </div>

        </div>
    </div>

@endsection

