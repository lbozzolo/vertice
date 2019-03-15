@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-body">

            <h1>
                Categorías
                <a class="btn btn-primary btn-sm" href="{!! route('categorias.create') !!}">Agregar</a>
            </h1>

            <div class="table-responsive">
                @include('categorias.table')
            </div>

        </div>
    </div>

@endsection

