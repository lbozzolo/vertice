<!DOCTYPE html>
<html lang="en">

<head>

    @include('layouts.partials.htmlheader')

</head>
<body>

@include('layouts.partials.navbar')

<div class="container-fluid page-body-wrapper">


    <div style="width: 100%">

        <div class="content-wrapper">

            @include('vendor.flash.message')

            @if(isset($deuda) && count($deuda) > 0)
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-body alert-danger text-center mb-3" style="border: 1px solid palevioletred">
                            <p>Usted adeuda recibos por los períodos detallados a continuación. Por favor, pase por AMGHI a confeccionar los recibos
                                correspondientes.<br> En caso de acumularse, quedarán automáticamente bloqueados los depósitos.
                            </p>
                            Período {!! $deuda[0]->mes !!} de {!! $deuda[0]->ano !!} - Adeuda recibo por : {!! $deuda[0]->monto !!} pesos.
                        </div>
                    </div>
                </div>
            @endif

            @yield('content')

        </div>

        @include('layouts.partials.footer')

    </div>

</div>

@include('layouts.partials.scripts')

</body>

</html>