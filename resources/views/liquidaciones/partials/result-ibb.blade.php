<div class="card mt-3">
    <div class="card-body">

        <h3>Liquidación número: {!! $num_liq !!} <span class="text-muted"> Fecha: {!! $fecha_ibb !!}</span></h3>

        <div class="table-responsive">
            <table class="table datatables table-striped table-bordered ">
                <thead>
                <tr>
                    <th>Descripción</th>
                    <th>Fecha</th>
                    <th>Monto</th>
                    <th>IVA 21%</th>
                    <th>IVA 10,5%</th>
                </tr>
                </thead>
                <tbody>
                @foreach($result_ibb as $resultado)
                    <tr>
                        <td>{!! $resultado->carpeta !!} {!! $resultado->descripcio !!}</td>
                        <td>{!! date("d/m/Y", strtotime($resultado->FECHA2)) !!}</td>
                        <td>{!! $resultado->monto !!}</td>
                        <td>{!! $resultado->iva21 !!}</td>
                        <td>{!! $resultado->iva10 !!}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>