@extends('web.layout')


@section('content')

    <section class="parallax_window_in short" data-parallax="scroll" data-image-src="{{ asset('template-web/assets/img/subheader_in_3.jpg') }}" data-natural-width="1400" data-natural-height="400">
        <div id="sub_content_in">
            <div class="container">
                <h1>Nuestros Productos</h1>
                <p></p>
            </div>
        </div>
    </section><!-- /section -->

    <div id="position">
        <div class="container">

        </div>
    </div><!-- /position -->

    <main>
        <div class="container margin_60_35">
            <div class="row">
                <div class="col-md-9">
                    <div class="shop-section">

                        <div class="items-sorting">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="results_shop">
                                        {!! $productos->render() !!}
                                    </div>
                                </div>

                            </div>
                        </div><!--End Sort By-->

                        <div class="row">


                            @foreach($productos as $producto)

                                <div class="shop-item col-lg-4 col-md-6 col-sm-6">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image">
                                                <a href="{!! route('web.producto.detalle', $producto->id) !!}">
                                                    @if($producto->mainImage())
                                                    <img src="{{ route('imagenes.ver', $producto->mainImage()->path) }}" class="img-responsive" alt="{!! $producto->mainImage()->title !!}" style="margin: 0px auto;">
                                                    @else
                                                        <img src="{{ asset('template-web/assets/img/products/thumb-1.jpg') }}" alt="">
                                                    @endif
                                                </a>
                                            </figure>
                                            
                                        </div>
                                        <div class="product_description">
                                            <h3><a href="{!! route('web.producto.detalle', $producto->id) !!}">{!! $producto->name !!}</a></h3>
                                        </div>
                                    </div>
                                </div><!--End Shop Item-->

                            @endforeach




                        </div><!--End Shop Item-->

                        <hr>

                    </div><!-- End row -->
                </div><!-- End col -->

                <!--Sidebar-->
                <div class="col-md-3">
                    <aside class="sidebar">

                        <div class="widget" id="cat_shop">
                            <h4>Categorias</h4>
                            <ul>
                                @forelse($categorias as $categoria)
                                    <li><a href="{!! route('web.productos', $categoria->id) !!}">{!! ucfirst($categoria->name) !!}</a></li>
                                @empty
                                    <li>No hay ninguna categoría cargada</li>
                                @endforelse
                            </ul>
                        </div><!-- End widget -->

                    </aside>
            </div><!--/Sidebar-->
        </div><!--/row-->
        </div><!--/container-->
    </main><!--/main-->

@endsection
