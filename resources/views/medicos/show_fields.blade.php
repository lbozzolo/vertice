<div class="row">

    <div class="col-lg-6">

        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <tbody>
                    <tr>
                        <td>Id:</td>
                        <td>{!! $medico->id !!}</td>
                    </tr>
                    <tr>
                        <td>Activo:</td>
                        <td>{!! $medico->activo !!}</td>
                    </tr>
                    <tr>
                        <td>Matrícula:</td>
                        <td>{!! $medico->matricula !!}</td>
                    </tr>
                    <tr>
                        <td>Categoría:</td>
                        <td>{!! $medico->categoria !!}</td>
                    </tr>
                    <tr>
                        <td>Nombre:</td>
                        <td>{!! $medico->apynom !!}</td>
                    </tr>
                    <tr>
                        <td>Dirección:</td>
                        <td>{!! $medico->direccion !!}</td>
                    </tr>
                    <tr>
                        <td>Teléfono 1:</td>
                        <td>{!! $medico->telefon1 !!}</td>
                    </tr>
                    <tr>
                        <td>Teléfono 2:</td>
                        <td>{!! $medico->telefon2 !!}</td>
                    </tr>
                    <tr>
                        <td>Documento:</td>
                        <td>{!! $medico->tipo_docu !!} {!! $medico->num_docu !!}</td>
                    </tr>
                    <tr>
                        <td>Cuit:</td>
                        <td>{!! $medico->cuit !!}</td>
                    </tr>
                    <tr>
                        <td>Ingresos brutos:</td>
                        <td>{!! $medico->ing_brut !!}</td>
                    </tr>
                    <tr>
                        <td>Tipo respuesta:</td>
                        <td>{!! $medico->tiporesp !!}</td>
                    </tr>
                    <tr>
                        <td>Tipo de liquidación:</td>
                        <td>{!! $medico->tipoliq !!}</td>
                    </tr>
                    {{--<tr>--}}
                        {{--<td>:</td>--}}
                        {{--<td>{!! $medico-> !!}</td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<td>:</td>--}}
                        {{--<td>{!! $medico-> !!}</td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<td>:</td>--}}
                        {{--<td>{!! $medico-> !!}</td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<td>:</td>--}}
                        {{--<td>{!! $medico-> !!}</td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<td>:</td>--}}
                        {{--<td>{!! $medico-> !!}</td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<td>:</td>--}}
                        {{--<td>{!! $medico-> !!}</td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<td>:</td>--}}
                        {{--<td>{!! $medico-> !!}</td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<td>:</td>--}}
                        {{--<td>{!! $medico-> !!}</td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<td>:</td>--}}
                        {{--<td>{!! $medico-> !!}</td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<td>:</td>--}}
                        {{--<td>{!! $medico-> !!}</td>--}}
                    {{--</tr>--}}
                </tbody>
            </table>
        </div>

    </div>
    <div class="col-lg-6">

        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <tbody>
                <tr>
                    <td>Id:</td>
                    <td>{!! $medico->id !!}</td>
                </tr>
                <tr>
                    <td>Título:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Fecha:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Última vez editado:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Estado:</td>
                    <td>
                        <label class="{!! ($medico->activo)? 'badge badge-success' : 'badge badge-danger' !!}">{!! ($medico->activo)? 'ACTIVO' : 'INACTIVO' !!}</label>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>

</div>
