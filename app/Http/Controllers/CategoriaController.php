<?php

namespace Amghi\Http\Controllers;

use Amghi\Http\Requests\CreateCategoriaRequest;
use Amghi\Http\Requests\UpdateCategoriaRequest;
use Amghi\Repositories\CategoriaRepository;
use Amghi\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CategoriaController extends AppBaseController
{
    private $categoriaRepository;

    public function __construct(CategoriaRepository $categoriaRepo)
    {
        $this->categoriaRepository = $categoriaRepo;
    }

    public function index(Request $request)
    {
        $this->categoriaRepository->pushCriteria(new RequestCriteria($request));
        $categorias = $this->categoriaRepository->all();

        return view('categorias.index')
            ->with('categorias', $categorias);
    }

    public function create()
    {
        return view('categorias.create');
    }

    public function store(CreateCategoriaRequest $request)
    {
        $input = $request->all();
        $input['slug'] = str_slug($request->name, '.');

        $categoria = $this->categoriaRepository->create($input);

        return redirect(route('categorias.index'))->with('ok', 'Categoría creada con éxito');
    }

    public function show($id)
    {
        $categoria = $this->categoriaRepository->findWithoutFail($id);

        if (empty($categoria))
            return redirect(route('categorias.index'))->withErrors('Categoría no encontrada');

        return view('categorias.show')->with('categoria', $categoria);
    }

    public function edit($id)
    {
        $categoria = $this->categoriaRepository->findWithoutFail($id);

        if (empty($categoria))
            return redirect(route('categorias.index'))->withErrors('Categoría no encontrada');

        return view('categorias.edit')->with('categoria', $categoria);
    }

    public function update($id, UpdateCategoriaRequest $request)
    {
        $categoria = $this->categoriaRepository->findWithoutFail($id);

        if (empty($categoria))
            return redirect(route('categorias.index'))->withErrors('Categoría no encontrada');

        $categoria = $this->categoriaRepository->update($request->all(), $id);

        $categoria->slug = str_slug($categoria->name, '.');
        $categoria->save();

        return redirect(route('categorias.index'))->with('ok', 'Categoría actualizada con éxito');
    }

    public function destroy($id)
    {
        $categoria = $this->categoriaRepository->findWithoutFail($id);

        if (empty($categoria))
            return redirect(route('categorias.index'))->withErrors('Categoría no encontrada');

        $this->categoriaRepository->delete($id);

        return redirect(route('categorias.index'))->with('ok', 'Categoría eliminada con éxito');
    }
}
