@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-body">

            <h1>
                Usuarios
                <a class="btn btn-primary btn-sm" href="{!! route('users.create') !!}">Agregar</a>
            </h1>

            <div class="table-responsive">
                @include('users.table')
            </div>

        </div>
    </div>

@endsection

