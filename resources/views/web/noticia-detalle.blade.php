@extends('web.layout')


@section('content')

    <!-- Title page -->
    <section class="bg-img1 kit-overlay1" style="background-image: url({{ asset('template-web/images/slide-01.jpg') }});">
        <div class="container size-h-3 p-tb-30 flex-col-c-c">
            <h2 class="t1-b-1 text-uppercase cl-0 txt-center m-b-25">
                Noticias AMGHI
            </h2>
        </div>
    </section>

    <!-- Content -->
    <div class="bg-0 p-t-100 p-b-70">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-sm-10 col-md-8 col-lg-12 p-b-30">
                    <div class="p-l-50 p-l-15-sr991 p-l-0-sr767">
                        <!-- News detail -->
                        <div class="m-b-25" style="max-width: 720px; margin: 0px auto">
                            @if($noticia->images->count())
                                <img src="{{ route('imagenes.ver', $noticia->mainImageOrNext()->path) }}" alt="{!! ($noticia->mainImageOrNext()->title)? $noticia->mainImageOrNext()->title : 'Noticias AMGHI' !!}">
                            @else
                                <img src="{{ asset('template-web/images/project-01.jpg')}}">
                            @endif
                            <h4 class="t1-b-3 cl-3 m-b-11 mt-3">
                                {!! $noticia->title !!}
                            </h4>

                            <div class="flex-wr-s-c m-b-11">
                                <div class="p-r-20">
                                    <i class="fs-14 cl-7 fa fa-calendar m-r-2"></i>

                                    <span class="t1-s-2 cl-7">
										{!! $noticia->fecha_creado !!}
									</span>
                                </div>
                            </div>

                            <p class="t1-s-2 cl-6 m-b-9">
                                {!! $noticia->body !!}
                            </p>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection