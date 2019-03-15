@extends('layouts.app')

@section('content')

    <div class="card" id="form-fields">
        <div class="card-body">

            <h1>
                Slider /
                <span class="text-warning">Editar</span>
            </h1>
            <div class="row">
                <div class="card-body">

                    {!! Form::model($slider, ['route' => ['sliders.update', $slider->id], 'method' => 'patch']) !!}

                    <div class="row">
                        @include('sliders.fields')
                    </div>

                    {!! Form::close() !!}

                </div>
            </div>

        </div>
    </div>

    <div class="card col-lg-12 mt-3">
        <div class="card-body">

            @include('sliders.images')

        </div>
    </div>

@endsection

@section('js')

    <script src="{{ asset('croppie/croppie.js') }}"></script>
    <script src="{{ asset('exif-js/exif.js') }}"></script>
    <script src="{{ asset('js/croppie-file-slider.js') }}"></script>

@endsection