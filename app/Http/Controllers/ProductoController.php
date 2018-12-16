<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductoRequest;
use App\Http\Requests\UpdateProductoRequest;
use App\Models\Color;
use App\Models\Categoria;
use App\Models\Producto;
use App\Repositories\ProductoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ProductoController extends AppBaseController
{
    /** @var  ProductoRepository */
    private $productoRepository;

    public function __construct(ProductoRepository $productoRepo)
    {
        $this->productoRepository = $productoRepo;
    }

    /**
     * Display a listing of the Producto.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->productoRepository->pushCriteria(new RequestCriteria($request));
        $data['productos'] = $this->productoRepository->all();

        return view('productos.index')->with($data);
    }

    /**
     * Show the form for creating a new Producto.
     *
     * @return Response
     */
    public function create()
    {
        $data['categorias'] = Categoria::all()->pluck('name', 'id');
        return view('productos.create')->with($data);
    }

    /**
     * Store a newly created Producto in storage.
     *
     * @param CreateProductoRequest $request
     *
     * @return Response
     */
    public function store(CreateProductoRequest $request)
    {
        $input = $request->all();

        $producto = $this->productoRepository->create($input);

//        $categorias = array_where($input['categorias'], function ($key, $value) {
//            return $value;
//        });

        //dd($input['categorias']);

        foreach($input['categorias'] as $key => $value){
            $categoria = Categoria::find($value);
            if($categoria)
                $producto->categorias()->attach($categoria);
        }


        return redirect(route('productos.index'))->with('ok', 'Producto creado con éxito');
    }

    /**
     * Display the specified Producto.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $producto = $this->productoRepository->findWithoutFail($id);

        if (empty($producto))
            return redirect(route('productos.index'))->withErrors('Producto no encontrado');

        return view('productos.show')->with('producto', $producto);
    }

    /**
     * Show the form for editing the specified Producto.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $data['producto'] = $this->productoRepository->findWithoutFail($id);
        $data['categorias'] = Categoria::all()->pluck('name', 'id');

        if (empty($data['producto']))
            return redirect(route('productos.index'))->withErrors('Producto no encontrado');

        return view('productos.edit')->with($data);
    }

    /**
     * Update the specified Producto in storage.
     *
     * @param  int              $id
     * @param UpdateProductoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductoRequest $request)
    {
        $producto = $this->productoRepository->findWithoutFail($id);

        if(!$request->has('highlight'))
            $request['highlight'] = 0;

        if (empty($producto))
            return redirect(route('productos.index'))->withErrors('Producto no encontrado');

        $producto = $this->productoRepository->update($request->all(), $id);

        $producto->categorias()->sync($request->categorias);

        return redirect(route('productos.index'))->with('ok', 'Producto actualizado con éxito');
    }

    /**
     * Remove the specified Producto from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $producto = $this->productoRepository->findWithoutFail($id);

        if (empty($producto))
            return redirect(route('productos.index'))->withErrors('Producto no encontrado');

        $this->productoRepository->delete($id);

        return redirect(route('productos.index'))->with('ok', 'Producto eliminado con éxito');
    }
}
