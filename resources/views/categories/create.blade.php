@extends('layouts.app')

@section('content')

    <div class="card col-lg-12">
        <div class="card-body">

            <h1>Categoría / <span class="text-warning">Agregar</span></h1>
            <div class="row">
                <div class="card-body">
                    {!! Form::open(['route' => 'categories.store']) !!}

                    <div class="row">
                        @include('categories.fields')
                    </div>

                    {!! Form::close() !!}
                </div>

            </div>

        </div>
    </div>

@endsection
