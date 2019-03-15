@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-body">

            <h1>
                Sliders
                <a class="btn btn-primary btn-sm" href="{!! route('sliders.create') !!}">Agregar</a>
            </h1>

            <div class="table-responsive">
                @include('sliders.table')
            </div>

        </div>
    </div>

@endsection

