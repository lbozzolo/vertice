<div class="card mt-3">
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-dark table-bordered">
                <thead style="background-color: #454545">
                    <tr style="background-color: gray">
                        <td></td>
                        <td colspan="6">DÉBITOS</td>
                        <td colspan="3">CRÉDITOS</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>BRUTO</td>
                        <td>I.B.</td>
                        <td>GANAN</td>
                        <td>CPSM</td>
                        <td>AMGHI</td>
                        <td>HOSP</td>
                        <td>GASTOS</td>
                        <td>ACRED</td>
                        <td>IVA 10,5</td>
                        <td>IVA 21</td>
                        <td>Neto a Cobtrar</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="background-color: rgb(188, 222, 222)" class="text-dark">
                            <span class="lead">{!! $debitos_creditos->TOTAL !!}</span>
                        </td>
                        <td>{!! $debitos_creditos->ING_BRUT !!}</td>
                        <td>{!! $debitos_creditos->GANANCIAS !!}</td>
                        <td>{!! $debitos_creditos->CPSM !!}</td>
                        <td>{!! $debitos_creditos->AMGHI !!}</td>
                        <td>{!! $debitos_creditos->HOSP !!}</td>
                        <td>{!! $debitos_creditos->DESCUENT !!}</td>
                        <td>{!! $debitos_creditos->ACREDITA !!}</td>
                        <td>{!! $debitos_creditos->IVA10 !!}</td>
                        <td>{!! $debitos_creditos->IVA21 !!}</td>
                        <td style="background-color: rgb(188, 222, 222)" class="text-dark">
                            <span class="lead">{!! $debitos_creditos->COBRADO2 !!}</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>