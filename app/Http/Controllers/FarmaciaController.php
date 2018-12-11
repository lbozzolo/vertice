<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFarmaciaRequest;
use App\Http\Requests\UpdateFarmaciaRequest;
use App\Repositories\FarmaciaRepository;
use App\Http\Controllers\AppBaseController as AppBaseController;
use Illuminate\Http\Request;
use App\Models\Empresa;
use App\Models\Image;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\Auth;

class FarmaciaController extends AppBaseController
{
    /** @var  FarmaciaRepository */
    private $farmaciaRepository;

    public function __construct(FarmaciaRepository $farmaciaRepo)
    {
        $this->farmaciaRepository = $farmaciaRepo;
    }

    /**
     * Display a listing of the Farmacia.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->farmaciaRepository->pushCriteria(new RequestCriteria($request));
        $farmacias = $this->farmaciaRepository->all();

        return view('farmacias.index')
            ->with('farmacias', $farmacias);
    }

    /**
     * Show the form for creating a new Farmacia.
     *
     * @return Response
     */
    public function create()
    {
        return view('farmacias.create');
    }

    /**
     * Store a newly created Farmacia in storage.
     *
     * @param CreateFarmaciaRequest $request
     *
     * @return Response
     */
    public function store(CreateFarmaciaRequest $request)
    {
        $input = $request->all();
        $farmacia = $this->farmaciaRepository->create($input);

        return redirect(route('farmacias.index'))->with('ok', 'Farmacia creada con éxito');
    }

    /**
     * Display the specified Farmacia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $farmacia = $this->farmaciaRepository->findWithoutFail($id);

        if (empty($farmacia))
            return redirect(route('farmacia.index'))->withErrors('Farmacia no encontrada');

        return view('farmacias.show')->with('farmacia', $farmacia);
    }

    /**
     * Show the form for editing the specified Farmacia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $farmacia = $this->farmaciaRepository->findWithoutFail($id);

        if (empty($farmacia))
            return redirect(route('farmacias.index'))->withErrors('Farmacia no encontada');

        return view('farmacias.edit')->with('farmacia', $farmacia);
    }

    /**
     * Update the specified Farmacia in storage.
     *
     * @param  int              $id
     * @param UpdateFarmaciaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFarmaciaRequest $request)
    {
        $farmacia = $this->farmaciaRepository->findWithoutFail($id);

        if (empty($farmacia))
            return redirect(route('farmacias.index'))->withErrors('Farmacia no encontrada');

        $farmacia = $this->farmaciaRepository->update($request->all(), $id);

        return redirect(route('farmacias.index'))->with('ok', 'Farmacia actualizada con éxito');
    }

    /**
     * Remove the specified Farmacia from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $farmacia = $this->farmaciaRepository->findWithoutFail($id);

        if (empty($farmacia))
            return redirect(route('farmacias.index'))->withErrors('Farmacia non encontrada');

        $this->farmaciaRepository->delete($id);

        return redirect(route('farmacias.index'))->with('ok', 'Farmacia eliminada con éxito');
    }

}
