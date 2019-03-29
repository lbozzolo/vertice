<?php

namespace Nobre\Http\Controllers;

use Nobre\Http\Requests\CreateCategoryRequest;
use Nobre\Http\Requests\UpdateCategoryRequest;
use Nobre\Repositories\CategoryRepository;
use Nobre\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CategoryController extends AppBaseController
{
    private $categoriaRepository;

    public function __construct(CategoryRepository $categoriaRepo)
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

    public function store(CreateCategoryRequest $request)
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

    public function update($id, UpdateCategoryRequest $request)
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
