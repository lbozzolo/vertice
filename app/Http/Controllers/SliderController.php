<?php

namespace Amghi\Http\Controllers;

use Amghi\Http\Requests\CreateSliderRequest;
use Amghi\Http\Requests\UpdateSliderRequest;
use Amghi\Repositories\SliderRepository;
use Amghi\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Amghi\Models\Slider;

class SliderController extends AppBaseController
{
    /** @var  SliderRepository */
    private $sliderRepository;

    public function __construct(SliderRepository $sliderRepo)
    {
        $this->sliderRepository = $sliderRepo;
    }

    /**
     * Display a listing of the Slider.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->sliderRepository->pushCriteria(new RequestCriteria($request));
        $sliders = $this->sliderRepository->all();

        return view('sliders.index')
            ->with('sliders', $sliders);
    }

    /**
     * Show the form for creating a new Slider.
     *
     * @return Response
     */
    public function create()
    {
        return view('sliders.create');
    }

    /**
     * Store a newly created Slider in storage.
     *
     * @param CreateSliderRequest $request
     *
     * @return Response
     */
    public function store(CreateSliderRequest $request)
    {
        $input = $request->all();

        $slider = $this->sliderRepository->create($input);

        Flash::success('Slider saved successfully.');

        return redirect(route('sliders.index'));
    }

    /**
     * Display the specified Slider.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $slider = $this->sliderRepository->findWithoutFail($id);

        if (empty($slider))
            return redirect(route('sliders.index'))->withErrors('Slider no encontrado');

        return view('sliders.show')->with('slider', $slider);
    }

    /**
     * Show the form for editing the specified Slider.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $slider = $this->sliderRepository->findWithoutFail($id);

        if (empty($slider))
            return redirect(route('sliders.index'))->withErrors('Slider no encontrado');

        return view('sliders.edit')->with('slider', $slider);
    }

    /**
     * Update the specified Slider in storage.
     *
     * @param  int              $id
     * @param UpdateSliderRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSliderRequest $request)
    {
        $slider = $this->sliderRepository->findWithoutFail($id);

        if (empty($slider))
            return redirect(route('sliders.index'))->withErrors('Slider no encontrado');

        $slider = $this->sliderRepository->update($request->all(), $id);

        return redirect(route('sliders.index'))->with('ok', 'Slider editado con éxito');
    }

    public function activate($id)
    {
        $slider = Slider::find($id);
        $sliders = Slider::all();

        foreach($sliders as $item){
            $item->active = null;
            $item->save();
        }

        $slider->active = 1;
        $slider->save();

        return redirect()->back()->with('ok', 'Slider activado');
    }
    /**
     * Remove the specified Slider from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $slider = $this->sliderRepository->findWithoutFail($id);

        if (empty($slider))
            return redirect(route('sliders.index'))->withErrors('Slider no encontrado');

        if($slider->active)
            return redirect()->back()->withErrors('No se puede eliminar el slider porque está activo. Active otro slider y vuelva a intentar');

        $this->sliderRepository->delete($id);

        return redirect(route('sliders.index'))->with('ok', 'Slider eliminado con éxito');
    }
}
