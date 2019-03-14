@extends('layouts.app')

@section('content')

    <div class="card " id="form-fields">
        <div class="card-body">

            <h1>
                Noticia /
                <span class="text-warning">Editar</span>
            </h1>
            <div class="row">
                <div class="card-body">

                    {!! Form::model($noticia, ['route' => ['noticias.update', $noticia->id], 'method' => 'patch']) !!}

                    <div class="row">
                    @include('noticias.fields')
                    </div>

                    {!! Form::close() !!}

                </div>
            </div>

        </div>
    </div>

    <div class="card col-lg-12 mt-3">
        <div class="card-body">

            @include('noticias.images')

        </div>
    </div>

@endsection

@section('js')

    <script src="{{ asset('croppie/croppie.js') }}"></script>
    <script src="{{ asset('exif-js/exif.js') }}"></script>
    <script src="{{ asset('js/croppie-file.js') }}"></script>
    <script>

        $('.select2').select2({
            multiple: true
        });

        $(document).ready(function() {
            $('#summernote').summernote({
                tabsize: 2,
                height: 300,
            });
        });


    </script>

@endsection