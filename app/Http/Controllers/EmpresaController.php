<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEmpresaRequest;
use App\Http\Requests\UpdateEmpresaRequest;
use App\Repositories\EmpresaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Empresa;
use App\Models\Image;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\Auth;

class EmpresaController extends AppBaseController
{
    /** @var  EmpresaRepository */
    private $empresaRepository;

    public function __construct(EmpresaRepository $empresaRepo)
    {
        $this->empresaRepository = $empresaRepo;
    }

    /**
     * Display a listing of the Empresa.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->empresaRepository->pushCriteria(new RequestCriteria($request));
        $empresas = $this->empresaRepository->all();

        return view('empresas.index')
            ->with('empresas', $empresas);
    }

    /**
     * Show the form for creating a new Empresa.
     *
     * @return Response
     */
    public function create()
    {
        return view('empresas.create');
    }

    /**
     * Store a newly created Empresa in storage.
     *
     * @param CreateEmpresaRequest $request
     *
     * @return Response
     */
    public function store(CreateEmpresaRequest $request)
    {
        $input = $request->all();
        $empresa = $this->empresaRepository->create($input);

        return redirect(route('empresas.index'))->with('ok', 'Empresa creada con éxito');
    }

    /**
     * Display the specified Empresa.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $empresa = $this->empresaRepository->findWithoutFail($id);

        if (empty($empresa))
            return redirect(route('empresas.index'))->withErrors('Empresa no encontrada');

        return view('empresas.show')->with('empresa', $empresa);
    }

    /**
     * Show the form for editing the specified Empresa.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $empresa = $this->empresaRepository->findWithoutFail($id);

        if (empty($empresa))
            return redirect(route('empresas.index'))->withErrors('Empresa no encontada');

        return view('empresas.edit')->with('empresa', $empresa);
    }

    /**
     * Update the specified Empresa in storage.
     *
     * @param  int              $id
     * @param UpdateEmpresaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmpresaRequest $request)
    {
        $empresa = $this->empresaRepository->findWithoutFail($id);

        if (empty($empresa))
            return redirect(route('empresas.index'))->withErrors('Empresa no encontrada');

        $empresa = $this->empresaRepository->update($request->all(), $id);

        return redirect(route('empresas.index'))->with('ok', 'Empresa actualizada con éxito');
    }

    /**
     * Remove the specified Empresa from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $empresa = $this->empresaRepository->findWithoutFail($id);

        if (empty($empresa))
            return redirect(route('empresas.index'))->withErrors('Empresa non encontrada');

        $this->empresaRepository->delete($id);

        return redirect(route('empresas.index'))->with('ok', 'Empresa eliminada con éxito');
    }

}
