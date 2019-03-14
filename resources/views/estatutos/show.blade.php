@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-body">
            <h1>
                Estatuto /
                <span class="text-warning">Detalles</span>
            </h1>
            <div class="row">

                <div class="col-lg-6">
                    <div class="card-body">

                        <div class="row">
                            <div class="table-responsive">

                                @include('estatutos.show_fields')

                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card-body">
                        <div class="card-header">
                            <span>Texto del estatuto</span>
                        </div>
                        <div class="card-body" style="background-color: #f2f8f9">
                            {!! $estatuto->body !!}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="card col-lg-12 mt-3">
        <div class="card-body">

            @include('estatutos.images-show')

        </div>
    </div>

@endsection

@section('js')

    <script src="{{ asset('croppie/croppie.js') }}"></script>
    <script src="{{ asset('exif-js/exif.js') }}"></script>
    <script src="{{ asset('js/croppie-file.js') }}"></script>

@endsection
