<?php

namespace Amghi\Http\Controllers;

use Amghi\Http\Requests\CreateEstatutoRequest;
use Amghi\Http\Requests\UpdateEstatutoRequest;
use Amghi\Models\Comision;
use Amghi\Repositories\ComisionRepository;
use Amghi\Http\Controllers\AppBaseController as AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ComisionController extends AppBaseController
{
    private $repository;

    public function __construct(ComisionRepository $repo)
    {
        $this->repository = $repo;
    }

    public function index(Request $request)
    {
        $this->repository->pushCriteria(new RequestCriteria($request));
        $comisiones = $this->repository->all();

        return view('comisiones.index')->with('comisiones', $comisiones);
    }

    public function create()
    {
        return view('comisiones.create');
    }

    public function store(CreateEstatutoRequest $request)
    {
        $input = $request->all();
        $comision = $this->repository->create($input);

        if(!$comision)
            return redirect()->back()->withErrors('Ocurrió un error. No se pudo guardar la comisión');

        return redirect(route('comisiones.index'))->with('ok', 'Comisión creada con éxito');
    }

    public function show($id)
    {
        $comision = $this->repository->findWithoutFail($id);

        if (empty($comision))
            return redirect(route('comisiones.index'))->withErrors('Comisión no encontrada');

        return view('comisiones.show')->with('comision', $comision);
    }

    public function edit($id)
    {
        $comision = $this->repository->findWithoutFail($id);

        if (empty($comision))
            return redirect(route('comisiones.index'))->withErrors('Comisión no encontada');

        return view('comisiones.edit')->with('comision', $comision);
    }

    public function update($id, UpdateEstatutoRequest $request)
    {
        $comision = $this->repository->findWithoutFail($id);
        $comisiones = Comision::all();

        if($request['active'] == 'on')
            $request['active'] = 1;

        if (empty($comision))
            return redirect(route('comisiones.index'))->withErrors('Comisión no encontrada');

        $comision = $this->repository->update($request->all(), $id);

        if($comision->active == 1){
            foreach($comisiones as $far){
                $far->active = null;
                $far->save();
            }
            $comisiones->active = 1;
            $comision->save();
        }

        return redirect(route('comisiones.index'))->with('ok', 'Comisión actualizada con éxito');
    }

    public function destroy($id)
    {
        $comision = $this->repository->findWithoutFail($id);

        if (empty($comision))
            return redirect(route('comisiones.index'))->withErrors('Comisión no encontrada');

        $this->repository->delete($id);

        return redirect(route('comisiones.index'))->with('ok', 'Comisión eliminada con éxito');
    }

}
