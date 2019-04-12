@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-body">
            <h1>
                Evento /
                <span class="text-warning">Detalles</span>
            </h1>

            @include('events.show_fields')

        </div>
    </div>

    <div class="card col-lg-12 mt-3">
        <div class="card-body">

            @include('images.images-show')

        </div>
    </div>

@endsection
