@extends('web.layout')

@section('content')

    <div id="main-content" class="site-main clearfix">
        <div id="content-wrap">
            <div id="site-content" class="site-content clearfix">
                <div id="inner-content" class="inner-content-wrap">
                   <div class="page-content" style="padding-bottom: 100px">


                       @include('web.partials.sliders')


                       @include('web.partials.eleccion')


                   </div>
                </div>
            </div>
        </div>
    </div>

@endsection