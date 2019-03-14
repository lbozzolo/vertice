<?php

namespace Amghi\Http\Controllers;

use Amghi\Http\Requests\CreateServicioRequest;
use Amghi\Http\Requests\UpdateServicioRequest;
use Amghi\Repositories\ServicioRepository;
use Amghi\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ServicioController extends AppBaseController
{
    private $servicioRepository;

    public function __construct(ServicioRepository $servicioRepo)
    {
        $this->servicioRepository = $servicioRepo;
    }

    public function index(Request $request)
    {
        $this->servicioRepository->pushCriteria(new RequestCriteria($request));
        $servicios = $this->servicioRepository->all();

        return view('servicios.index')
            ->with('servicios', $servicios);
    }

    public function create()
    {
        return view('servicios.create');
    }

    public function store(CreateServicioRequest $request)
    {
        $input = $request->all();
        $servicio = $this->servicioRepository->create($input);

        return redirect(route('servicios.index'))->with('ok', 'Servicio creado con éxito');
    }

    public function show($id)
    {
        $servicio = $this->servicioRepository->findWithoutFail($id);

        if (empty($servicio))
            return redirect(route('servicios.index'))->withErrors('Servicio no encontrado');

        return view('servicios.show')->with('servicio', $servicio);
    }

    public function edit($id)
    {
        $servicio = $this->servicioRepository->findWithoutFail($id);

        if (empty($servicio))
            return redirect(route('servicios.index'))->withErrors('Servicio no encontrado');

        return view('servicios.edit')->with('servicio', $servicio);
    }

    public function update($id, UpdateServicioRequest $request)
    {
        $servicio = $this->servicioRepository->findWithoutFail($id);

        if (empty($servicio))
            return redirect(route('servicios.index'))->withErrors('Servicio no encontrado');

        $servicio = $this->servicioRepository->update($request->all(), $id);

        $servicio->active = ($request->active == '1')? 1 : 0;
        $servicio->save();

        return redirect(route('servicios.index'))->with('ok', 'Servicio actualizado con éxito');
    }

    public function destroy($id)
    {
        $servicio = $this->servicioRepository->findWithoutFail($id);

        if (empty($servicio))
            return redirect(route('servicios.index'))->withErrors('Servicio no encontrado');

        $this->servicioRepository->delete($id);

        return redirect(route('servicios.index'))->with('ok', 'Servicio eliminado con éxito');
    }
}
