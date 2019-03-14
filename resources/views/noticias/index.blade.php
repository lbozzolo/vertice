@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-body">

            <h1>
                Noticias
                <a class="btn btn-primary btn-sm" href="{!! route('noticias.create') !!}">Agregar</a>
            </h1>

            <div class="table-responsive">
                @include('noticias.table')
            </div>

        </div>
    </div>

@endsection
