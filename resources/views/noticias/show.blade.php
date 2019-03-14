@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-body">
            <h1>
                Noticia /
                <span class="text-warning">Detalles</span>
            </h1>

            @include('noticias.show_fields')

        </div>
    </div>

    <div class="card col-lg-12 mt-3">
        <div class="card-body">

            @include('noticias.images-show')

        </div>
    </div>

@endsection
