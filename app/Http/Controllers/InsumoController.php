<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInsumoRequest;
use App\Http\Requests\UpdateInsumoRequest;
use App\Models\Color;
use App\Models\Categoria;
use App\Repositories\InsumoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class InsumoController extends AppBaseController
{
    /** @var  InsumoRepository */
    private $insumoRepository;

    public function __construct(InsumoRepository $insumoRepo)
    {
        $this->insumoRepository = $insumoRepo;
    }

    /**
     * Display a listing of the Insumo.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->insumoRepository->pushCriteria(new RequestCriteria($request));
        $data['insumos'] = $this->insumoRepository->all();

        return view('insumos.index')
            ->with($data);
    }

    /**
     * Show the form for creating a new Insumo.
     *
     * @return Response
     */
    public function create()
    {
        return view('insumos.create');
    }

    /**
     * Store a newly created Insumo in storage.
     *
     * @param CreateInsumoRequest $request
     *
     * @return Response
     */
    public function store(CreateInsumoRequest $request)
    {
        $input = $request->all();
        $insumo = $this->insumoRepository->create($input);

        /*if($request->categorias){
            foreach($request->categorias as $id){
                $insumo->categorias()->create([
                    'categoriable_id' => $insumo->id,
                    'categoriable_type' => 'App\Models\Insumo',
                    'categoria_id' => $id
                ]);
            }
        }*/

        return redirect(route('insumos.index'))->with('ok', 'Insumo creado con éxito');
    }

    /**
     * Display the specified Insumo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $insumo = $this->insumoRepository->findWithoutFail($id);

        if (empty($insumo))
            return redirect(route('insumos.index'))->withErrors('Insumo no encontrado');

        return view('insumos.show')->with('insumo', $insumo);
    }

    /**
     * Show the form for editing the specified Insumo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $data['insumo'] = $this->insumoRepository->findWithoutFail($id);
        $data['colors'] = Color::all()->pluck('name', 'id');
        $data['categorias'] = Categoria::all()->pluck('name', 'id');

        if (empty($data['insumo']))
            return redirect(route('insumos.index'))->withErrors('Insumo no encontrado');

        return view('insumos.edit')->with($data);
    }

    /**
     * Update the specified Insumo in storage.
     *
     * @param  int              $id
     * @param UpdateInsumoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInsumoRequest $request)
    {
        $insumo = $this->insumoRepository->findWithoutFail($id);

        if (empty($insumo))
            return redirect(route('insumos.index'))->withErrors('Insumo no encontrado');

        $insumo = $this->insumoRepository->update($request->all(), $id);

        $insumo->categorias()->sync($request->categorias);

        return redirect(route('insumos.index'))->with('ok', 'Insumo actualizado con éxito');
    }

    /**
     * Remove the specified Insumo from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $insumo = $this->insumoRepository->findWithoutFail($id);

        if (empty($insumo))
            return redirect(route('insumos.index'))->withErrors('Insumo no encontrado');

        $this->insumoRepository->delete($id);

        return redirect(route('insumos.index'))->with('ok', 'Insumo eliminado con éxito');
    }
}
