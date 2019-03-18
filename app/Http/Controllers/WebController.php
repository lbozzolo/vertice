<?php

namespace Amghi\Http\Controllers;

use Amghi\Http\Controllers\AppBaseController;
use Amghi\Http\Requests\ContactRequest;
use Amghi\Models\Categoria;
use Amghi\Models\Comision;
use Amghi\Models\Estatuto;
use Amghi\Models\Image;
use Amghi\Models\Noticia;
use Amghi\Models\Servicio;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Mail;
use Amghi\Models\Slider;
use Illuminate\Support\Facades\DB;

class WebController extends AppBaseController
{

    public function index()
    {
        $data['slider'] = Slider::where('active', '1')->first();
        $data['noticias'] = Noticia::where('highlight', 1)->get();
        $data['images'] = ($data['slider'])? $data['slider']->images->sortByDesc('main') : '';

        return view('web.home')->with($data);
    }

    public function estatuto()
    {
        $data['estatuto'] = Estatuto::where('active', '=', 1)->first();
        return view('web.estatuto')->with($data);
    }

    public function comision()
    {
        $data['comision'] = Comision::where('active', '=', 1)->first();
        return view('web.comision')->with($data);
    }

    public function servicios()
    {
        $data['servicios'] = Servicio::where('active', '!=', null)->get();
        return view('web.servicios')->with($data);
    }

    public function medicos()
    {
        $data['nosotros'] = Estatuto::where('active', 1)->first();
        return view('web.medicos')->with($data);
    }

    public function noticias()
    {
        $data['noticias'] = Noticia::where('active', '!=', null)->get();
        return view('web.noticias')->with($data);
    }

    public function verNoticia($id)
    {
        $data['noticia'] = Noticia::find($id);
        return view('web.noticia-detalle')->with($data);
    }

    public function contacto()
    {
        return view('web.contacto');
    }

    public function postContacto(ContactRequest $request)
    {
        //dd($request->all());

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'msg' => $request->msg,
            'subject' => 'Contacto de cliente'
        );


        Mail::send('emails.contacto', ['data' => $data], function($message) use ($data){
            $message->to(config('mail.username'));
            $message->subject($data['subject']);
            $message->from($data['email']);
        });

        return redirect()->back()->with('ok', 'Su correo se ha enviado con éxito.');


    }


}
