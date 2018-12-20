@extends('web.layout')

@section('content')

    <main>

        @if($slider)
            @include('web.partials.sliders')
        @endif

        <!--/container-->

        <div class="container margin_60_35">
            <h3 class="main_title_left"><em></em>Productos Destacados</h3>
            <div class="owl-carousel owl-theme case_studies add_bottom_30">

                @forelse($productos as $producto)

                    <div>
                        <a href="{{ route('web.producto.detalle', $producto->id) }}" title="{!! $producto->name !!}">
                            <figure>
                                @if($producto->mainImage())
                                    <img src="{{ route('imagenes.ver', $producto->mainImage()->path) }}" class="img-responsive" alt="{!! $producto->mainImage()->title !!}" style="margin: 0px auto;">
                                @endif
                            </figure>
                            <h4>{!! $producto->name !!}</h4>
                        </a>
                    </div>

                @empty

                    <div><figure><img src="{{ asset('template-web/assets/img/case_study_thumb_1.jpg') }}" alt=""> </figure><h4>Producto 1</h4></div>
                    <div><figure><img src="{{ asset('template-web/assets/img/case_study_thumb_2.jpg') }}" alt=""> </figure><h4>Producto 2</h4></div>
                    <div><figure><img src="{{ asset('template-web/assets/img/case_study_thumb_3.jpg') }}" alt=""> </figure><h4>Producto 3</h4></div>

                @endforelse

            </div><!--/case_studies -->
        </div><!--/container-->


    </main><!--/main-->


@endsection