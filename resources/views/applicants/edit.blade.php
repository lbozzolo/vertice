@extends('layouts.app')

@section('content')

    <div class="card" id="form-fields">
        <div class="card-body">

            <h1>
                Aspirante /
                <span class="text-warning">Editar</span>
            </h1>
            <div class="row">
                <div class="card-body">

                    {!! Form::model($applicant, ['route' => ['applicants.update', $applicant->id], 'method' => 'patch']) !!}

                    <div class="row">
                        @include('applicants.fields')
                    </div>

                    {!! Form::close() !!}

                </div>
            </div>

        </div>
    </div>

    {{--<div class="card col-lg-12 mt-3">--}}
        {{--<div class="card-body">--}}

            {{--@include('applicants.images')--}}

        {{--</div>--}}
    {{--</div>--}}

@endsection

@section('js')

    <script>

        $('.select2').select2({
            multiple: true
        });

    </script>

@endsection