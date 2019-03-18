@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-body">
            <h1>
                Comisión /
                <span class="text-warning">Detalles</span>
            </h1>
            <div class="row">

                <div class="col-lg-6">
                    <div class="card-body">

                        <div class="row">
                            <div class="table-responsive">

                                @include('comisiones.show_fields')

                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card-body">
                        <div class="card-header">
                            <span>Texto de la comisión</span>
                        </div>
                        <div class="card-body" style="background-color: #f2f8f9">
                            {!! $comision->body !!}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('js')

    <script src="{{ asset('croppie/croppie.js') }}"></script>
    <script src="{{ asset('exif-js/exif.js') }}"></script>
    <script src="{{ asset('js/croppie-file.js') }}"></script>

@endsection
