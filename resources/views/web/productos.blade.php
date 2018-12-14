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
                                        Mostrando 1–9 de 15 resultados
                                    </div>
                                </div>

                            </div>
                        </div><!--End Sort By-->

                        <div class="row">

                            <div class="shop-item col-lg-4 col-md-6 col-sm-6">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="detalle_producto.html"><img src="{{ asset('template-web/assets/img/products/image-1.jpg') }}" alt=""></a></figure>
                                        <div class="item-options clearfix">
                                            <a href="detalle_producto.html" class="btn_shop"><span class="icon-eye"></span>
                                                <div class="tool-tip">
                                                    Ver Producto
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product_description">
                                        <h3><a href="detalle_producto.html">Producto 1</a></h3>
                                    </div>
                                </div>
                            </div><!--End Shop Item-->

                            <div class="shop-item col-lg-4 col-md-6 col-sm-6">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="detalle_producto.html"><img src="{{ asset('template-web/assets/img/products/image-1.jpg') }}" alt=""></a></figure>
                                        <div class="item-options clearfix">
                                            <a href="detalle_producto.html" class="btn_shop"><span class="icon-eye"></span>
                                                <div class="tool-tip">
                                                    Ver Producto
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product_description">
                                        <h3><a href="detalle_producto.html">Producto 2</a></h3>
                                    </div>
                                </div>
                            </div><!--End Shop Item-->

                            <div class="shop-item col-lg-4 col-md-6 col-sm-6">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="detalle_producto.html"><img src="{{ asset('template-web/assets/img/products/image-1.jpg') }}" alt=""></a></figure>
                                        <div class="item-options clearfix">
                                            <a href="detalle_producto.html" class="btn_shop"><span class="icon-eye"></span>
                                                <div class="tool-tip">
                                                    Ver Producto
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product_description">
                                        <h3><a href="detalle_producto.html">Producto 3</a></h3>
                                    </div>
                                </div>
                            </div><!--End Shop Item-->

                            <div class="shop-item col-lg-4 col-md-6 col-sm-6">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="detalle_producto.html"><img src="{{ asset('template-web/assets/img/products/image-1.jpg') }}" alt=""></a></figure>
                                        <div class="item-options clearfix">
                                            <a href="detalle_producto.html" class="btn_shop"><span class="icon-eye"></span>
                                                <div class="tool-tip">
                                                    Ver Producto
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product_description">
                                        <h3><a href="detalle_producto.html">Producto 4</a></h3>
                                    </div>
                                </div>
                            </div><!--End Shop Item-->

                            <div class="shop-item col-lg-4 col-md-6 col-sm-6">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="detalle_producto.html"><img src="{{ asset('template-web/assets/img/products/image-1.jpg') }}" alt=""></a></figure>
                                        <div class="item-options clearfix">
                                            <a href="detalle_producto.html" class="btn_shop"><span class="icon-eye"></span>
                                                <div class="tool-tip">
                                                    Ver Producto
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product_description">
                                        <h3><a href="detalle_producto.html">Producto 5</a></h3>
                                    </div>
                                </div>
                            </div><!--End Shop Item-->

                            <div class="shop-item col-lg-4 col-md-6 col-sm-6">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="detalle_producto.html"><img src="{{ asset('template-web/assets/img/products/image-1.jpg') }}" alt=""></a></figure>
                                        <div class="item-options clearfix">
                                            <a href="detalle_producto.html" class="btn_shop"><span class="icon-eye"></span>
                                                <div class="tool-tip">
                                                    Ver Producto
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product_description">
                                        <h3><a href="detalle_producto.html">Producto 6</a></h3>
                                    </div>
                                </div>
                            </div><!--End Shop Item-->
                        </div><!--End Shop Item-->

                        <hr>

                        <div class="text-center">
                            <ul class="pagination">
                                <li><a href="#">Ant</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">Sig</a></li>
                            </ul>
                        </div><!-- End pagination-->
                    </div><!-- End row -->
                </div><!-- End col -->

                <!--Sidebar-->
                <div class="col-md-3">
                    <aside class="sidebar">


                        <div class="widget" id="cat_shop">
                            <h4>Categorias</h4>
                            <ul>
                                <li><a href="#">Categoria 1</a></li>
                                <li><a href="#">Categoria 2</a></li>
                                <li><a href="#">Categoria 3</a></li>
                                <li><a href="#">Categoria 4</a></li>
                            </ul>
                        </div><!-- End widget -->


                </div>
                </aside>
            </div><!--/Sidebar-->
        </div><!--/row-->
        </div><!--/container-->
    </main><!--/main-->

@endsection