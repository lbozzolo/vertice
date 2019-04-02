@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-body">

            <h1>
                Social & Media
                <a class="btn btn-primary btn-sm" href="{!! route('images.create') !!}">Agregar imagen a Trabajo</a>
                <a class="btn btn-primary btn-sm" href="{!! route('images.create') !!}">Agregar imagen a </a>
            </h1>

            @if($images_big->count() && $images_thumb->count())

                @include('images.images')

            @else

                <span class="text-muted">No hay ninguna imagen cargada en el sistema.</span>

            @endif

        </div>
    </div>

@endsection

