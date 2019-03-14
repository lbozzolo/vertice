@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-body">
            <h1>
                Servicio /
                <span class="text-warning">Detalles</span>
            </h1>

            <div class="row">
                <div class="table-responsive col-lg-6">

                    @include('servicios.show_fields')

                </div>
            </div>

        </div>
    </div>

    <div class="card col-lg-12 mt-3">
        <div class="card-body">

            @include('servicios.images-show')

        </div>
    </div>

@endsection
