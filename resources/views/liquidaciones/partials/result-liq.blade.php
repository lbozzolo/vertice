<div class="card mt-3">
    <div class="card-body">

        <h3>Detalle de las liquidaciones</h3>

        <div class="table-responsive">
            <table class="table datatables table-striped table-bordered ">
                <thead style="background-color: #E8E8E8">
                <tr>
                    <th>Fecha</th>
                    <th>Num Liq</th>
                    <th>BRUTO</th>
                    <th>AMGHI</th>
                    <th>CPSM</th>
                    <th>Htal</th>
                    <th>IIBB</th>
                    <th>Ganac</th>
                    <th>Acred</th>
                    <th>Desc</th>
                    <th>IVA 10,5</th>
                    <th>IVA 21</th>
                    <th>PAGADO</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($result_liq as $resultado)
                    <tr>
                        <td>{!! date("d/m/Y", strtotime($resultado->fecha)) !!}</td>
                        <td>{!! $resultado->num_liq !!}</td>
                        <td style="background-color: rgb(188, 222, 222)">{!! $resultado->total !!}</td>
                        <td>{!! $resultado->amghi !!}</td>
                        <td>{!! $resultado->cpsm !!}</td>
                        <td>{!! $resultado->hosp !!}</td>
                        <td>{!! $resultado->ing_brut !!}</td>
                        <td>{!! $resultado->ganancias !!}</td>
                        <td>{!! $resultado->acredita !!}</td>
                        <td>{!! $resultado->descuent !!}</td>
                        <td>{!! $resultado->iva10 !!}</td>
                        <td>{!! $resultado->iva21 !!}</td>
                        <td style="background-color: rgb(188, 222, 222)">{!! $resultado->cobrado !!}</td>
                        <td>
                            <div class='btn-group'>
                                <a href="{!! route('liquidaciones.iibb', [$resultado->certifi]) !!}" target="_blank" class='btn btn-secondary btn-xs' title="Ingresos Brutos">IIBB</a>
                                <a href="{!! route('liquidaciones.detalles', [$resultado->num_liq]) !!}" class='btn btn-dark btn-xs' title="Detalles">DET</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>