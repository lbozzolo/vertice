<?php

namespace Amghi\Http\Controllers;

use Amghi\Models\Liquidacion;
use Amghi\Models\Medico;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LiquidacionController extends AppBaseController
{
    public function index()
    {
        $matricula = Auth::user()->matricula;
        $data['medico'] = Medico::where('matricula', $matricula)->first();

        $sql_deuda = "SELECT * FROM acumcred WHERE recibo <> 's' AND matricula = $matricula";
        $data['deuda'] = DB::select($sql_deuda);

        return view('liquidaciones.index')->with($data);
    }

    public function show($id)
    {
        $liquidacion = Liquidacion::find($id);

        if (empty($liquidacion))
            return redirect(route('liquidaciones.index'))->withErrors('Liquidación no encontrada');

        return view('liquidaciones.show')->with('liquidacion', $liquidacion);
    }

    public function consultar(Request $request)
    {
        $fecha_desde = Carbon::parse($request->fecha_desde);
        $fecha_hasta = Carbon::parse($request->fecha_hasta);
        $matricula = Auth::user()->matricula;
        $sql = "SELECT *, DATE_FORMAT(FECHA,'%d-%m-%Y') as FECHA2,CASE WHEN COBRADO < 0 THEN 0 ELSE COBRADO END as COBRADO2 FROM retiene WHERE matricula = ".$matricula." and fecha BETWEEN '".$fecha_desde."' AND '".$fecha_hasta."' ORDER BY NUM_LIQ";

        $sql_total = "SELECT "
            . " sum(TOTAL) as TOTAL,"
            . " sum(AMGHI) as AMGHI,"
            . " sum(CPSM) as CPSM,"
            . " sum(HOSP) as HOSP,"
            . " sum(ING_BRUT) as ING_BRUT,"
            . " sum(GANANCIAS) as GANANCIAS,"
            . " sum(IVA10) as IVA10,"
            . " sum(IVA21) as IVA21,"
            . " sum(CASE WHEN COBRADO < 0 THEN 0 ELSE COBRADO END) as COBRADO"
            . " FROM retiene"
            . " WHERE  matricula = ".$matricula." AND fecha BETWEEN '".$fecha_desde."' AND '".$fecha_hasta."'";

        $data['result_liq'] = DB::select($sql);
        $data['total_liq'] = DB::select($sql_total);
        $data['medico'] = Medico::where('matricula', $matricula)->first();

        $sql_deuda = "SELECT * FROM acumcred WHERE recibo <> 's' AND matricula = $matricula";
        $data['deuda'] = DB::select($sql_deuda);

        return view('liquidaciones.index')->with($data);
    }

    public function consultarDetalles($num_liq)
    {
        $matricula = Auth::user()->matricula;
        $sql = "SELECT  DATE_FORMAT(FECHA,'%d-%m-%Y') as FECHA2 FROM retiene WHERE matricula = ".$matricula." and num_liq = ".$num_liq;
        $sql2 = "SELECT *, DATE_FORMAT(FECHA,'%d-%m-%Y') as FECHA2 FROM hist_liq WHERE matricula = ".$matricula;
        $sql2.= " and num_liq = ".$num_liq." ORDER BY codliqui";

        $sql3  = "SELECT MATRICULA  NUM_LIQ, FECHA, TOTAL, AMGHI, CPSM, HOSP, ING_BRUT, GANANCIAS, ACREDITA, DESCUENT, COBRADO, PAT, CERTIFI, IVA21, IVA10,CASE WHEN COBRADO < 0 THEN 0 ELSE COBRADO END as COBRADO2  ";
        $sql3 .= "FROM retiene WHERE matricula = ".$matricula;
        $sql3.= " and NUM_LIQ = ".$num_liq;

        $data['fecha_ibb'] = DB::select($sql)[0]->FECHA2;
        $data['num_liq'] = $num_liq;
        $data['result_ibb'] = DB::select($sql2);
        $data['debitos_creditos'] = DB::select($sql3)[0];
        $data['medico'] = Medico::where('matricula', $matricula)->first();

        $sql_deuda = "SELECT * FROM acumcred WHERE recibo <> 's' AND matricula = $matricula";
        $data['deuda'] = DB::select($sql_deuda);

        return view('liquidaciones.index')->with($data);
    }

    public function consultarIIBB($certifi)
    {
        $matricula = Auth::user()->matricula;
        $sql = "SELECT  *, DATE_FORMAT(FECHA,'%d-%m-%Y') as FECHA2  FROM retiene WHERE CERTIFI = ".$certifi. " AND matricula = ".$matricula;

        $data['result_certificado'] = DB::select($sql)[0];
        $data['certificado'] = $certifi;
        $data['medico'] = Medico::where('matricula', $matricula)->first();

        $data['fecha_hoy'] = $this->diacadena(time());

        $sql_deuda = "SELECT * FROM acumcred WHERE recibo <> 's' AND matricula = $matricula";
        $data['deuda'] = DB::select($sql_deuda);

        return view('liquidaciones.certificado')->with($data);
    }

    public function resumenesMensuales()
    {
        $matricula = Auth::user()->matricula;
        $data['medico'] = Medico::where('matricula', $matricula)->first();

        $sql_deuda = "SELECT * FROM acumcred WHERE recibo <> 's' AND matricula = $matricula";
        $data['deuda'] = DB::select($sql_deuda);

        return view('liquidaciones.resumenes-mensuales')->with($data);
    }

    public function consultarResumenesMensuales(Request $request)
    {
        $matricula = Auth::user()->matricula;
        $fecha_desde = Carbon::parse($request->fecha_desde);
        $fecha_hasta = Carbon::parse($request->fecha_hasta);

        $sql = "SELECT year(FECHA) as anio,  ";
        $sql .= "month(FECHA) as Mes,  ";
        $sql .= "sum(TOTAL) as TOTAL, ";
        $sql .= "sum(AMGHI) as AMGHI, ";
        $sql .= "sum(CPSM) as CPSM, ";
        $sql .= "sum(HOSP) as HOSP, ";
        $sql .= "sum(ING_BRUT) as ING_BRUT, ";
        $sql .= "sum(GANANCIAS) as GANANCIAS, ";
        $sql .= "sum(ACREDITA) as ACREDITA, ";
        $sql .= "sum(ABS(DESCUENT)) as DESCUENT, ";
        $sql .= "sum(IVA10) as IVA10, ";
        $sql .= "sum(IVA21) as IVA21, ";
        $sql .= "sum(CASE WHEN COBRADO < 0 THEN 0 ELSE COBRADO END) as COBRADO";
        $sql .= " FROM retiene WHERE matricula = ".$matricula." and fecha BETWEEN '".$fecha_desde."' AND '".$fecha_hasta."' ";
        $sql .= " GROUP BY  month(FECHA), year(FECHA) ORDER BY  year(FECHA), month(FECHA)";

        $sql2 = "SELECT "
            . " sum(TOTAL) as TOTAL,"
            . " sum(AMGHI) as AMGHI,"
            . " sum(CPSM) as CPSM,"
            . " sum(HOSP) as HOSP,"
            . " sum(ING_BRUT) as ING_BRUT,"
            . " sum(GANANCIAS) as GANANCIAS,"
            . " sum(ACREDITA) as ACREDITA,"
            . " sum(ABS(DESCUENT)) as DESCUENT,"
            . " sum(IVA10) as IVA10,"
            . " sum(IVA21) as IVA21,"
            . " sum(CASE WHEN COBRADO < 0 THEN 0 ELSE COBRADO END) as COBRADO"
            . " FROM retiene"
            . " WHERE  matricula = ".$matricula." AND fecha BETWEEN '".$fecha_desde."' AND '".$fecha_hasta."'";

        $data['result_mensuales'] = DB::select($sql);

        foreach($data['result_mensuales'] as $result){
            $result->Mes =  $this->mes($result->Mes);
        }

        $data['total_mensuales'] = DB::select($sql2);
        $data['medico'] = Medico::where('matricula', $matricula)->first();

        $sql_deuda = "SELECT * FROM acumcred WHERE recibo <> 's' AND matricula = $matricula";
        $data['deuda'] = DB::select($sql_deuda);

        return view('liquidaciones.resumenes-mensuales')->with($data);
    }

    function diacadena($f)
    {
        return $dia = $this->diadelasemana(date('w',$f)).", ".date("j",$f)." de ".$this->mes(date ("n",$f))." de ".date("Y",$f);
    }

    function diadelasemana($num)
    {
        if ($num == 0)  $dia = "Domingo";
        if ($num == 1)  $dia = "Lunes";
        if ($num == 2)  $dia = "Martes";
        if ($num == 3)  $dia = "Miércoles";
        if ($num == 4)  $dia = "Jueves";
        if ($num == 5)  $dia = "Viernes";
        if ($num == 6)  $dia = "Sábado";
        return $dia;
    }

    function mes($num)
    {
        if ($num == 1)  $mes = "Enero";
        if ($num == 2)  $mes = "Febrero";
        if ($num == 3)  $mes = "Marzo";
        if ($num == 4)  $mes = "Abril";
        if ($num == 5)  $mes = "Mayo";
        if ($num == 6)  $mes = "Junio";
        if ($num == 7)  $mes = "Julio";
        if ($num == 8)  $mes = "Agosto";
        if ($num == 9)  $mes = "Septiembre";
        if ($num == 10)  $mes = "Octubre";
        if ($num == 11)  $mes = "Noviembre";
        if ($num == 12)  $mes = "Diciembre";
        return $mes;
    }

}
