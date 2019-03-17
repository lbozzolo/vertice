<?php

namespace Amghi\Http\Controllers;

use Amghi\Http\Requests\CreateEstatutoRequest;
use Amghi\Http\Requests\UpdateEstatutoRequest;
use Amghi\Models\Estatuto;
use Amghi\Repositories\EstatutoRepository;
use Amghi\Http\Controllers\AppBaseController as AppBaseController;
use Illuminate\Http\Request;
use Amghi\Models\Image;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\Auth;

class EstatutoController extends AppBaseController
{
    private $repository;

    public function __construct(EstatutoRepository $repo)
    {
        $this->repository = $repo;
    }

    public function index(Request $request)
    {
        $this->repository->pushCriteria(new RequestCriteria($request));
        $estatutos = $this->repository->all();

        return view('estatutos.index')->with('estatutos', $estatutos);
    }

    public function create()
    {
        return view('estatutos.create');
    }

    public function store(CreateEstatutoRequest $request)
    {
        $input = $request->all();
        $estatuto = $this->repository->create($input);

        return redirect(route('estatutos.index'))->with('ok', 'Estatuto creado con éxito');
    }

    public function show($id)
    {
        $estatuto = $this->repository->findWithoutFail($id);

        if (empty($estatuto))
            return redirect(route('estatutos.index'))->withErrors('Estatuto no encontrado');

        return view('estatutos.show')->with('estatuto', $estatuto);
    }

    public function edit($id)
    {
        $estatuto = $this->repository->findWithoutFail($id);

        if (empty($estatuto))
            return redirect(route('estatutos.index'))->withErrors('Estatuto no encontado');

        return view('estatutos.edit')->with('estatuto', $estatuto);
    }

    public function update($id, UpdateEstatutoRequest $request)
    {
        $estatuto = $this->repository->findWithoutFail($id);
        $estatutos = Estatuto::all();

        if($request['active'] == 'on')
            $request['active'] = 1;

        if (empty($estatuto))
            return redirect(route('estatutos.index'))->withErrors('Estatuto no encontrado');

        $estatuto = $this->repository->update($request->all(), $id);

//        $estatuto->active = ($request->active == '1')? 1 : 0;
//        $estatuto->save();

        if($estatuto->active == 1){
            foreach($estatutos as $far){
                $far->active = null;
                $far->save();
            }
            $estatuto->active = 1;
            $estatuto->save();
        }

        return redirect(route('estatutos.index'))->with('ok', 'Estatuto actualizado con éxito');
    }

    public function destroy($id)
    {
        $estatuto = $this->repository->findWithoutFail($id);

        if (empty($estatuto))
            return redirect(route('estatutos.index'))->withErrors('Estatuto non encontrado');

        $this->repository->delete($id);

        return redirect(route('estatutos.index'))->with('ok', 'Estatuto eliminado con éxito');
    }

}
