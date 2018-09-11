<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategoriableRequest;
use App\Http\Requests\UpdateCategoriableRequest;
use App\Repositories\CategoriableRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CategoriableController extends AppBaseController
{
    /** @var  CategoriableRepository */
    private $categoriableRepository;

    public function __construct(CategoriableRepository $categoriableRepo)
    {
        $this->categoriableRepository = $categoriableRepo;
    }

    /**
     * Display a listing of the Categoriable.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->categoriableRepository->pushCriteria(new RequestCriteria($request));
        $categoriables = $this->categoriableRepository->all();

        return view('categoriables.index')
            ->with('categoriables', $categoriables);
    }

    /**
     * Show the form for creating a new Categoriable.
     *
     * @return Response
     */
    public function create()
    {
        return view('categoriables.create');
    }

    /**
     * Store a newly created Categoriable in storage.
     *
     * @param CreateCategoriableRequest $request
     *
     * @return Response
     */
    public function store(CreateCategoriableRequest $request)
    {
        $input = $request->all();
        $categoriable = $this->categoriableRepository->create($input);

        return redirect(route('categoriables.index'))->with('ok', 'Categoriable creado con éxito');
    }

    /**
     * Display the specified Categoriable.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $categoriable = $this->categoriableRepository->findWithoutFail($id);

        if (empty($categoriable))
            return redirect(route('categoriables.index'))->withErrors('Categoriable no encontrado');

        return view('categoriables.show')->with('categoriable', $categoriable);
    }

    /**
     * Show the form for editing the specified Categoriable.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $categoriable = $this->categoriableRepository->findWithoutFail($id);

        if (empty($categoriable))
            return redirect(route('categoriables.index'))->withErrors('Categoriable no encontrado');

        return view('categoriables.edit')->with('categoriable', $categoriable);
    }

    /**
     * Update the specified Categoriable in storage.
     *
     * @param  int              $id
     * @param UpdateCategoriableRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCategoriableRequest $request)
    {
        $categoriable = $this->categoriableRepository->findWithoutFail($id);

        if (empty($categoriable))
            return redirect(route('categoriables.index'))->withErrors('Categoriable no encontrado');

        $categoriable = $this->categoriableRepository->update($request->all(), $id);

        return redirect(route('categoriables.index'))->with('ok', 'Categoriable actualizado con éxito');
    }

    /**
     * Remove the specified Categoriable from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $categoriable = $this->categoriableRepository->findWithoutFail($id);

        if (empty($categoriable))
            return redirect(route('categoriables.index'))->withErrors('Categoriable no encontrado');

        $this->categoriableRepository->delete($id);

        return redirect(route('categoriables.index'))->with('ok', 'Categoriable eliminado con éxito');
    }
}
