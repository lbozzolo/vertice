<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEventoRequest;
use App\Http\Requests\UpdateEventoRequest;
use App\Repositories\EventoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EventoController extends AppBaseController
{
    /** @var  EventoRepository */
    private $eventoRepository;

    public function __construct(EventoRepository $eventoRepo)
    {
        $this->eventoRepository = $eventoRepo;
    }

    /**
     * Display a listing of the Evento.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->eventoRepository->pushCriteria(new RequestCriteria($request));
        $eventos = $this->eventoRepository->all();

        return view('eventos.index')
            ->with('eventos', $eventos);
    }

    /**
     * Show the form for creating a new Evento.
     *
     * @return Response
     */
    public function create()
    {
        return view('eventos.create');
    }

    /**
     * Store a newly created Evento in storage.
     *
     * @param CreateEventoRequest $request
     *
     * @return Response
     */
    public function store(CreateEventoRequest $request)
    {
        $input = $request->all();
        $evento = $this->eventoRepository->create($input);

        return redirect(route('eventos.index'))->with('ok', 'Evento creado con éxito');
    }

    /**
     * Display the specified Evento.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $evento = $this->eventoRepository->findWithoutFail($id);

        if (empty($evento))
            return redirect(route('eventos.index'))->withErrors('Evento no encontrado');

        return view('eventos.show')->with('evento', $evento);
    }

    /**
     * Show the form for editing the specified Evento.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $evento = $this->eventoRepository->findWithoutFail($id);

        if (empty($evento))
            return redirect(route('eventos.index'))->withErrors('Evento no encontrado');

        return view('eventos.edit')->with('evento', $evento);
    }

    /**
     * Update the specified Evento in storage.
     *
     * @param  int              $id
     * @param UpdateEventoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEventoRequest $request)
    {
        $evento = $this->eventoRepository->findWithoutFail($id);

        if (empty($evento))
            return redirect(route('eventos.index'))->withErrors('Evento no encontrado');

        $evento = $this->eventoRepository->update($request->all(), $id);

        return redirect(route('eventos.index'))->with('ok', 'Evento actualizado con éxito');
    }

    /**
     * Remove the specified Evento from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $evento = $this->eventoRepository->findWithoutFail($id);

        if (empty($evento))
            return redirect(route('eventos.index'))->withErrors('Evento no encontrado');

        $this->eventoRepository->delete($id);

        return redirect(route('eventos.index'))->with('ok', 'Evento eliminado con éxito');
    }
}
