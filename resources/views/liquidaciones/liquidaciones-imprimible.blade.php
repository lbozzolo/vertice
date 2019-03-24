<style type="text/css">
    <!--
    td {
        font-family: Verdana, Arial, Helvetica, sans-serif;
        font-size:x-small;
    }
    .titulo1 {
        font-family: Verdana, Arial, Helvetica, sans-serif;
        font-size:16px;
        text-align:center;
        margin-bottom:12px;
        font-weight:bold;
    }
    .titulo2 {
        font-family: Verdana, Arial, Helvetica, sans-serif;
        font-size:14px;
        text-align:center;
        margin-bottom:10px;
        font-weight:bold;
    }
    .Estilo3 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; text-align: center; margin-bottom: 10px; font-weight: bold; }
    -->
</style>

<div align="center"><span class="Estilo3">Av. 51 Numero 1725 e/29 y 30 - Tel: 0221-4575000 - info@amghi.com.ar - Hospt.: 0221-4535000 int 257/273
	  CUIT.: 30-62834328-0 - Iva EXENTO</span>
</div><br /><br />
<div class="titulo1" align="center">
    Liquidaciones entre el {!! $fechas['desde'] !!} y el {!! $fechas['hasta'] !!}
</div>

<table border="1" cellspacing="0" width="90%" align="center">
    <tr bgcolor="#CCCCCC" align="center">
        <td>FECHA</td>
        <td>NUM_LIQ</td>
        <td>BRUTO</td>
        <td>AMGHI</td>
        <td>CPSM</td>
        <td>HTAL</td>
        <td>IIBB</td>
        <td>GANANC</td>
        <td>IVA 10,5</td>
        <td>IVA 21</td>
        <td>PAGADO</td>
    </tr>
    @foreach($result_imprimible as $resultado)
        <tr align="right">
            <td>{!! date("d/m/Y", strtotime($resultado->fecha)) !!}</td>
            <td>{!! $resultado->num_liq !!}</td>
            <td style="background-color: #CCCCCC">{!! $resultado->total !!}</td>
            <td>{!! $resultado->amghi !!}</td>
            <td>{!! $resultado->cpsm !!}</td>
            <td>{!! $resultado->hosp !!}</td>
            <td>{!! $resultado->ing_brut !!}</td>
            <td>{!! $resultado->ganancias !!}</td>
            <td>{!! $resultado->iva10 !!}</td>
            <td>{!! $resultado->iva21 !!}</td>
            <td style="background-color: #CCCCCC">{!! $resultado->cobrado !!}</td>
        </tr>
    @endforeach
</table><br />

<div class="titulo2" align="center">Totales</div>
<table border="1" cellspacing="0" width="90%" align="center">
    <tr bgcolor="#CCCCCC" align="center">
        <td style="background-color: #CCCCCC">BRUTO</td>
        <td class="style10">AMGHI</td>
        <td class="style10">CPSM</td>
        <td class="style10">HTAL</td>
        <td class="style10">IIBB</td>
        <td class="style10">GANANC</td>
        <td class="style10">IVA 10,5</td>
        <td class="style10">IVA 21</td>
        <td style="background-color: #CCCCCC">PAGADO</td>
    </tr>
    <tr align="right">
        <td style="background-color: #CCCCCC">{!! $total_imprimible[0]->TOTAL !!}</td>
        <td>{!! $total_imprimible[0]->AMGHI !!}</td>
        <td>{!! $total_imprimible[0]->CPSM !!}</td>
        <td>{!! $total_imprimible[0]->HOSP !!}</td>
        <td>{!! $total_imprimible[0]->ING_BRUT !!}</td>
        <td>{!! $total_imprimible[0]->GANANCIAS !!}</td>
        <td>{!! $total_imprimible[0]->IVA10 !!}</td>
        <td>{!! $total_imprimible[0]->IVA21 !!}</td>
        <td style="background-color: #CCCCCC">{!! $total_imprimible[0]->COBRADO !!}</td>
    </tr>
</table>
