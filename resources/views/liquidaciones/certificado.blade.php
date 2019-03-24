<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Comprobante de retención</title>

    @include('layouts.partials.htmlheader')
</head>

<body>

    <div class="row">
        <div class="col-lg-6 col-md-6">

            <div class="card ml-4 mt-2" style="border: 1px solid lightgrey">
                <div class="card-body">
                    <h3 class="text-right">Impuestos sobre los ingresos brutos</h3>
                    <h4 class="text-right">Comprobante de retención</h4>

                    <ul class="list-unstyled">
                        <li><strong>1.&nbsp;Comprobante n&uacute;mero:</strong> 0001-{!! $certificado !!}</li>
                        <li>
                            <strong>2.&nbsp;Agente de Retención</strong>
                            <table class="table">
                                <tr><td>CUIT:</td><td>30-62834328-0</td></tr>
                                <tr><td>Número de IIBB:</td><td>30-62834328-0</td></tr>
                                <tr><td>Razón Social: </td><td>A.M.G.H.I.</td></tr>
                                <tr><td>Domicilio:</td><td>Av. 51 e/ 29 y 30</td></tr>
                            </table>
                        </li>
                        <li>
                            <strong>3. Datos del Contribuyente sujeto a Retención</strong>
                            <table class="table">
                                <tr><td>CUIT:</td><td>{!! $medico->cuit !!}</td></tr>
                                <tr><td>Número de IIBB:</td><td>{!! $medico->ing_brut !!}</td></tr>
                                <tr><td>Razón Social: </td><td>{!! $medico->apynom !!}</td></tr>
                                <tr><td>Domicilio:</td><td>{!! $medico->direccion !!}</td></tr>
                            </table>
                        </li>
                        <li>
                            <strong>4. Datos de la Operación</strong>
                            <table class="table table-bordered">
                                <tr><td>Fecha</td><td>Base Imponible</td><td>Alic</td><td>Imp. Retenido</td></tr>
                                <tr><td>{!! $result_certificado->FECHA2 !!}</td><td>{!! $result_certificado->total !!}</td><td>{!! $medico->ibrut !!}</td><td>{!! $result_certificado->ing_brut !!}</td></tr>
                            </table>
                        </li>
                    </ul>

                    <div style=" margin-left:300px;">
                        <img src="{{ asset('imagenes/logos/firmaAmghi.png') }}" width="125" height="119" /><br>
                        <p>{!! $fecha_hoy !!}</p>
                    </div>

                </div>
            </div>

        </div>
    </div>




      @include('layouts.partials.scripts')

</body>
</html>
