@extends('web.layout')


@section('content')

    <!-- Title page -->
    <section class="bg-img1 kit-overlay1" style="background-image: url(images/bg-07.jpg);">
        <div class="container size-h-3 p-tb-30 flex-col-c-c">
            <h2 class="t1-b-1 text-uppercase cl-0 txt-center m-b-25">
                Noticias AMGHI
            </h2>

        </div>
    </section>

    <!-- Content -->
    <div class="bg-0 p-t-95 p-b-50">
        <div class="container">
            <div class="row isotope-grid">

                @forelse($noticias as $noticia)

                    <div class="col-sm-6 col-lg-4 p-b-50 isotope-item business-n">
                        <div class="bg-0 h-full">
                            <a href="news-detail.html" class="hov-img0 of-hidden">
                                @if($noticia->images->count())
                                    <img src="{{ route('imagenes.ver', $noticia->mainImageOrNext()->path) }}" alt="{!! ($noticia->mainImageOrNext()->title)? $noticia->mainImageOrNext()->title : 'Noticias AMGHI' !!}">
                                @else
                                    <img src="{{ asset('template-web/images/project-01.jpg')}}">
                                @endif
                            </a>

                            <div class="bg-0 p-t-26">
                                <h4 class="p-b-12">
                                    <a href="news-detail.html" class="t1-m-1 cl-3 hov-link2 trans-02">
                                       {!! $noticia->title !!}
                                    </a>
                                </h4>

                                <div class="flex-wr-s-c p-b-9">
                                    <div class="p-r-20">
                                        <i class="fs-14 cl-7 fa fa-calendar m-r-2"></i>

                                        <span class="t1-s-2 cl-7">
                                            {!! $noticia->fecha_creado !!}
                                        </span>
                                    </div>
                                </div>

                                <div style="margin-bottom: 20px; max-height: 100px; text-overflow: ellipsis; overflow: hidden;">{!! $noticia->body !!}</div>

                                <a href="{{ route('web.noticias.ver', $noticia->id) }}" class="d-inline-flex flex-c-c size-a-1 p-rl-15 t1-s-2 text-uppercase cl-0 bg-11 hov-btn1 trans-02">
                                    ampliar
                                </a>
                            </div>
                        </div>
                    </div>

                @empty

                    <span>Todavía no hay ninguna noticia cargada</span>

                @endforelse

            </div>
        </div>
    </div>

@endsection