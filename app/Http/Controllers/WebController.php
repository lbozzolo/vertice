<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Models\Empresa;
use App\Models\Evento;
use App\Models\Insumo;
use App\Models\Proyecto;
use App\Models\Servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Slider;

class WebController extends AppBaseController
{

    public function index()
    {
        $slider = Slider::where('active', '1')->first();
        return view('web.home', compact('slider'));
    }

    public function empresa()
    {
        $data['empresas'] = Empresa::all();
        return view('web.empresa')->with($data);
    }

    public function servicios()
    {
        $data['servicios'] = Servicio::all();
        return view('web.servicios')->with($data);
    }

    public function proyectos()
    {
        $data['proyectos'] = Proyecto::all();
        return view('web.proyectos')->with($data);
    }

    public function detalleProyecto($id)
    {
        $proyecto = Proyecto::find($id);

        if (empty($proyecto))
            return redirect()->back()->withErrors('Proyecto no encontrado');

        return view('web.detalle-proyecto', compact('proyecto'));
    }

    public function eventos()
    {
        $data['eventos'] = Evento::all();
        return view('web.eventos')->with($data);
    }

    public function detalleEvento($id)
    {
        $evento = Evento::find($id);

        if (empty($evento))
            return redirect()->back()->withErrors('Evento no encontrado');

        return view('web.detalle-evento', compact('evento'));
    }

    public function equipamiento()
    {
        $data['insumos'] = Insumo::all();
        return view('web.equipamiento')->with($data);
    }

    public function detalleEquipamiento($id)
    {
        $insumo = Insumo::find($id);

        if (empty($insumo))
            return redirect()->back()->withErrors('Equipamiento no encontrado');

        return view('web.detalle-equipamiento', compact('insumo'));
    }

    public function contacto()
    {
        return view('web.contacto');
    }

    public function postContacto(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' =>'required|email',
            'textarea' =>'required'
        ]);

        $data = array(
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'subject' => $request->subject,
            'textarea' => $request->textarea
        );

        Mail::send('emails.contacto', ['data' => $data], function($message) use ($data){
            $message->to('lucas@verticedigital.com.ar');
            $message->subject($data['subject']);
            $message->from($data['email']);
        });

        return redirect()->back()->with('ok', 'Su correo se ha enviado con éxito.');


    }


}
