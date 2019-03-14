@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-body">

            <h1>
                Estatutos
                <a class="btn btn-primary btn-sm" href="{!! route('estatutos.create') !!}">Agregar</a>
            </h1>

            <div class="table-responsive">
                @include('estatutos.table')
            </div>

        </div>
    </div>

@endsection

