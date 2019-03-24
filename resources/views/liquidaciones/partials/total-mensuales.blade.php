<div class="card mt-3">
    <div class="card-body">

        <h3>Totales</h3>
        <div class="table-responsive">
            <table class="table table-dark">
                <thead style="background-color: #454545">
                <tr>
                    <th>Bruto</th>
                    <th>AMGHI</th>
                    <th>CPSM</th>
                    <th>Htal</th>
                    <th>IIBB</th>
                    <th>Ganac</th>
                    <th>Acred</th>
                    <th>IVA 10,5</th>
                    <th>IVA 21</th>
                    <th>Pagado</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td style="background-color: rgb(188, 222, 222)" class="text-dark">
                        <span class="lead">{!! $total_mensuales[0]->TOTAL !!}</span>
                    </td>
                    <td>{!! $total_mensuales[0]->AMGHI !!}</td>
                    <td>{!! $total_mensuales[0]->CPSM !!}</td>
                    <td>{!! $total_mensuales[0]->HOSP !!}</td>
                    <td>{!! $total_mensuales[0]->ING_BRUT !!}</td>
                    <td>{!! $total_mensuales[0]->GANANCIAS !!}</td>
                    <td>{!! $total_mensuales[0]->ACREDITA !!}</td>
                    <td>{!! $total_mensuales[0]->IVA10 !!}</td>
                    <td>{!! $total_mensuales[0]->IVA21 !!}</td>
                    <td style="background-color: rgb(188, 222, 222)" class="text-dark lead">
                        <span class="lead">{!! $total_mensuales[0]->COBRADO !!}</span>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>