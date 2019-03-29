@extends('layouts.app')

@section('css')
    <style type="text/css">
        body .popover{display:none !important; }
    </style>
@endsection

@section('content')

    <div class="card " id="form-fields">
        <div class="card-body">

            <h1>
                Work /
                <span class="text-warning">Editar</span>
            </h1>
            <div class="row">
                <div class="card-body">

                    {!! Form::model($work, ['route' => ['works.update', $work->id], 'method' => 'patch']) !!}

                    <div class="row">
                    @include('works.fields')
                    </div>

                    {!! Form::close() !!}

                </div>
            </div>

        </div>
    </div>

    <div class="card col-lg-12 mt-3">
        <div class="card-body">

            @include('works.images')

        </div>
    </div>

@endsection

@section('js')

    <script src="{{ asset('croppie/croppie.js') }}"></script>
    <script src="{{ asset('exif-js/exif.js') }}"></script>
    <script src="{{ asset('js/croppie-file-servicio.js') }}"></script>
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