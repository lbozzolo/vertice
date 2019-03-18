@extends('web.layout')

@section('content')

    <!-- Title page -->
    <section class="bg-img1 kit-overlay1" style="background-image: url({{ asset('template-web/images/bg-05.jpg') }});">
        <div class="container size-h-3 p-tb-30 flex-col-c-c">
            <h2 class="t1-b-1 text-uppercase cl-0 txt-center m-b-25">
                Comisión directiva
            </h2>

        </div>
    </section>

    <!--  -->
    <section class="bg-0 p-t-92 p-b-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12 p-b-35">

                    {!! ($comision)? $comision->body : 'No hay datos cargados sobre la comisión directiva' !!}

                </div>


            </div>
        </div>
    </section>

@endsection