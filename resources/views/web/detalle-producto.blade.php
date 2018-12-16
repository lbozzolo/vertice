@extends('web.layout')


@section('content')

    <main>
        <div class="container margin_60_35">
            <div class="row">
                <div class="col-md-12">

                    <div class="product-details">

                        <div class="basic-details">
                            <div class="row">
                                <div class="image-column col-md-6 col-sm-6 col-xs-12">
                                    <figure class="image-box">
                                        @if($producto->main_image)
                                            <img src="{{ route('imagenes.ver', $producto->main_image->path) }}" class="img-responsive" alt="{!! $producto->main_image->title !!}" style="margin: 0px auto;">
                                        @endif
                                    </figure>
                                </div>
                                <div class="info-column col-md-6 col-sm-6 col-xs-12">
                                    <div class="details-header">
                                        <h2>{!! $producto->name !!}</h2>
                                    </div>
                                    <div class="text">
                                        <p>{!! $producto->description !!}</p>
                                    </div>
                                    <div class="text">
                                        @if($producto->categorias->count())
                                            <span>Categorías:</span>
                                            <ul class="item-meta">
                                                @foreach($producto->categorias as $categoria)
                                                    <li>{!! $categoria->name !!}</li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </div>
                                    <div class="text">
                                        <p>Código: {!! $producto->code !!}</p>
                                    </div>
                                    <div class="text">
                                        <p>Precio: ${!! $producto->price !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--End Basic Details-->

                        <div class="product-info-tabs">

                            <div class="prod-tabs" id="product-tabs">
                                <div class="tab-btns clearfix">
                                    <a href="#prod-description" class="tab-btn active-btn">Descripción del Producto</a>
                                </div>

                                <div class="tabs-container">
                                    <div class="tab active-tab" id="prod-description">

                                        <div class="content">
                                            <p>
                                                Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.
                                            </p>
                                        </div>
                                    </div><!--End Tab-->


                                </div><!--End tabs-container-->
                            </div><!--End prod-tabs-->
                        </div><!--End product-info-tabs-->
                    </div><!--End Product-details-->
                </div><!--End Col-->

                <!--Sidebar-->
            </div><!--/row-->
        </div><!--/container-->
    </main><!--/main-->

@endsection