@extends('web.layout')

@section('content')

    <section class="bg-img1 kit-overlay1" style="background-image: url('{{ asset('template-web/images/bg-05.jpg') }}');">
        <div class="container size-h-3 p-tb-30 flex-col-c-c">
            <h2 class="t1-b-1 text-uppercase cl-0 txt-center m-b-25">
                Nuestro Estatuto
            </h2>

        </div>
    </section>

    <section class="bg-0 p-t-92 p-b-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12 p-b-35">

                    <div class="flex-col-c-s p-b-35">
                        <h3 class="t1-b-1 cl-3 m-b-11">
                            {!! ($estatuto)? $estatuto->title : '' !!}
                        </h3>

                        <div class="size-a-2 bg-3"></div>
                    </div>

                    <div class="p-r-20 p-r-0-sr767">

                        {!! ($estatuto)? $estatuto->body : 'Todavía no se ha cargado estatuto' !!}

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection