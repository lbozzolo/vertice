@extends('web.layout')


@section('content')

    <!-- Title page -->
    <section class="bg-img1 kit-overlay1" style="background-image: url({{asset('template-web/images/bg-06.jpg')}});">
        <div class="container size-h-3 p-tb-30 flex-col-c-c">
            <h2 class="t1-b-1 text-uppercase cl-0 txt-center m-b-25">
                Servicios que brindamos
            </h2>

        </div>
    </section>

    <!-- Service -->
    <div class="bg-0 p-t-100 p-b-50">
        <div class="container">
            <div class="row">

            @forelse($servicios as $servicio)

                <div class="col-sm-6 col-md-4 p-b-42">
                    <div>
                        <a href="#" class="hov-img0 of-hidden">
                            @if($servicio->images->count())
                                <img src="{{ route('imagenes.ver', $servicio->mainImageOrNext()->path) }}" alt="{!! ($servicio->mainImageOrNext()->title)? $servicio->mainImageOrNext()->title : 'Servicio AMGHI' !!}">
                            @else
                                <img src="{{ asset('images')}}">
                            @endif
                        </a>

                        <div class="p-t-26">
                            <a href="#" class="d-inline-block t1-m-1 cl-3 hov-link2 trans-02 m-b-7">
                                {!! $servicio->title !!}
                            </a>

                            <p style="max-height: 200px; white-space: normal; overflow: hidden">{!! $servicio->body !!}</p>
                            {{--<p class="t1-s-2 cl-6 m-b-17" style="overflow: hidden; width: 350px; word-break: break-all; height: 200px; text-overflow: ellipsis; ">--}}
                                {{--{!! $servicio->body !!}--}}
                            {{--</p>--}}


                        </div>
                    </div>
                </div>

            @empty

                <span class="text-muted">No hay ningún servicio cargado</span>

            @endforelse


            </div>
        </div>
    </div>


@endsection