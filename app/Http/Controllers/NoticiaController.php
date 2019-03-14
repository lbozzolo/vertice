<?php

namespace Amghi\Http\Controllers;

use Amghi\Http\Requests\CreateNoticiaRequest;
use Amghi\Http\Requests\UpdateNoticiaRequest;
use Amghi\Models\Categoria;
use Amghi\Models\Noticia;
use Amghi\Repositories\NoticiaRepository;
use Amghi\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class NoticiaController extends AppBaseController
{
    /** @var  NoticiaRepository */
    private $repository;

    public function __construct(NoticiaRepository $repo)
    {
        $this->repository = $repo;
    }

    public function index(Request $request)
    {
        $this->repository->pushCriteria(new RequestCriteria($request));
        $data['noticias'] = $this->repository->all();

        return view('noticias.index')->with($data);
    }

    public function create()
    {
        $data['categorias'] = Categoria::all()->pluck('name', 'id');
        return view('noticias.create')->with($data);
    }

    public function store(CreateNoticiaRequest $request)
    {
        $input = $request->all();
        $noticia = $this->repository->create($input);

        if(!$noticia)
            return redirect()->back()->withErrors('Ocurrió un error. No se pudo crear la noticia');

        return redirect(route('noticias.index'))->with('ok', 'Noticia creado con éxito');
    }

    public function show($id)
    {
        $noticia = $this->repository->findWithoutFail($id);

        if (empty($noticia))
            return redirect(route('noticias.index'))->withErrors('Noticia no encontrada');

        return view('noticias.show')->with('noticia', $noticia);
    }

    public function edit($id)
    {
        $data['noticia'] = $this->repository->findWithoutFail($id);
        $data['categorias'] = Categoria::all()->pluck('name', 'id');

        if (empty($data['noticia']))
            return redirect(route('noticias.index'))->withErrors('Noticia no encontrada');

        return view('noticias.edit')->with($data);
    }

    public function update($id, UpdateNoticiaRequest $request)
    {
        $noticia = $this->repository->findWithoutFail($id);

        if(!$request->has('highlight'))
            $request['highlight'] = 0;

        if (empty($noticia))
            return redirect(route('noticias.index'))->withErrors('Noticia no encontrada');

        $noticia = $this->repository->update($request->all(), $id);

        $noticia->categorias()->sync($request->categorias);

        return redirect(route('noticias.index'))->with('ok', 'Noticia actualizada con éxito');
    }

    public function destroy($id)
    {
        $noticia = $this->repository->findWithoutFail($id);

        if (empty($noticia))
            return redirect(route('noticias.index'))->withErrors('Noticia no encontrada');

        $this->repository->delete($id);

        return redirect(route('noticias.index'))->with('ok', 'Noticia eliminada con éxito');
    }
}
