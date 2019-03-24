<div class="card mt-3">
    <div class="card-body">

        <h3>Detalle de las liquidaciones mensuales</h3>

        <div class="table-responsive">
            <table class="table datatables table-striped table-bordered ">
                <thead style="background-color: #E8E8E8">
                <tr>
                    <th>Año</th>
                    <th>Mes</th>
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
                </tr>
                </thead>
                <tbody>
                @foreach($result_mensuales as $resultado)
                    <tr>
                        <td>{!! $resultado->anio !!}</td>
                        <td>{!! $resultado->Mes !!}</td>
                        <td style="background-color: rgb(188, 222, 222)">{!! $resultado->TOTAL !!}</td>
                        <td>{!! $resultado->AMGHI !!}</td>
                        <td>{!! $resultado->CPSM !!}</td>
                        <td>{!! $resultado->HOSP !!}</td>
                        <td>{!! $resultado->ING_BRUT !!}</td>
                        <td>{!! $resultado->GANANCIAS !!}</td>
                        <td>{!! $resultado->ACREDITA !!}</td>
                        <td>{!! $resultado->DESCUENT !!}</td>
                        <td>{!! $resultado->IVA10 !!}</td>
                        <td>{!! $resultado->IVA21 !!}</td>
                        <td style="background-color: rgb(188, 222, 222)">{!! $resultado->COBRADO !!}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>