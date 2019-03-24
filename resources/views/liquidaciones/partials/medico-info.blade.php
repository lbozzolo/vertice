<div class="col-lg-8">
    <div class="card">
        <div class="card-body">

            <p class="text-center">Información del médico</p>
            <div class="row">
                <div class="col-lg-4">
                    <table class="table table-bordered">
                        <tr>
                            <td class="text-warning">Matrícula:</td>
                            <td>{!! $medico->matricula !!}</td>
                        </tr>
                        <tr>
                            <td class="text-warning">Profesional:</td>
                            <td>{!! $medico->apynom !!}</td>
                        </tr>
                        <tr>
                            <td class="text-warning">Dirección:</td>
                            <td>{!! $medico->direccion !!}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-lg-4">
                    <table class="table table-bordered">
                        <tr>
                            <td class="text-info">Teléfono:</td>
                            <td>{!! $medico->telefon1 !!}</td>
                        </tr>
                        <tr>
                            <td class="text-info">CUIT:</td>
                            <td>{!! $medico->cuit !!}</td>
                        </tr>
                        <tr>
                            <td class="text-info">Email:</td>
                            <td>{!! $medico->email !!}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-lg-4">
                    <table class="table table-bordered">
                        <tr>
                            <td class="text-primary">Celular:</td>
                            <td>{!! $medico->telefon2 !!}</td>
                        </tr>
                        <tr>
                            <td class="text-primary">Categoría:</td>
                            <td>{!! $medico->categoria !!}</td>
                        </tr>
                        <tr>
                            <td class="text-primary">Cond. IVA:</td>
                            <td>{!! $medico->tiporesp !!}</td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>