<?php

namespace Amghi\Http\Controllers;

use Amghi\Models\Medico;

class MedicoController extends AppBaseController
{

    public function index()
    {
        $data['medicos'] = Medico::get(['id', 'apynom', 'matricula', 'activo', 'categoria', 'servicio']);

        return view('medicos.index')->with($data);
    }

    public function show($id)
    {
        $medico = Medico::find($id);

        if (empty($medico))
            return redirect(route('medicos.index'))->withErrors('Médico no encontrado');

        return view('medicos.show')->with('medico', $medico);
    }

}
