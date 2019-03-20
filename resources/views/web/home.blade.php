@extends('web.layout')

@section('content')

    @if($slider)
    <section class="slider">
        @include('web.partials.sliders')
    </section>
    @endif

@endsection