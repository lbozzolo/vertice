<?php

namespace Amghi\Http\Controllers;

use Amghi\Http\Controllers\AppBaseController;
use Amghi\Http\Requests\ContactRequest;
use Amghi\Models\Categoria;
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

        return view('web.home')->with($data);
    }

    public function farmacia()
    {
        $data['estatutos'] = Estatuto::where('active', '==', 1)->first();
        return view('web.farmacia')->with($data);
    }

    public function servicios()
    {
        $data['servicios'] = Servicio::where('active', '!=', null)->get();
        return view('web.servicios')->with($data);
    }

    public function productos($categoriaId = null)
    {
        $categoria = ($categoriaId)? Categoria::find($categoriaId) : null;

        $data['noticias'] = ($categoria)? new Paginator($categoria->productos, 9) : Noticia::with('images')->paginate(9);
        $data['categorias'] = Categoria::all();

        return view('web.noticias')->with($data);
    }

    public function nosotros()
    {
        $data['nosotros'] = Estatuto::where('active', 1)->first();
        //dd($data);
        return view('web.nosotros')->with($data);
    }

    public function galeria()
    {
        $data['images'] = Image::where('imageable_id', null)->get();
        return view('web.galeria')->with($data);
    }

    public function detalleProducto($id)
    {
        $producto = Noticia::find($id);
        //dd($producto->mainImage());

        if (empty($producto))
            return redirect()->back()->withErrors('Noticia no encontrado');

        return view('web.detalle-producto', compact('producto'));
    }

    public function contacto()
    {
        return view('web.contacto');
    }

    public function postContacto(ContactRequest $request)
    {
        //dd($request->all());

        $data = array(
            'name_contact' => $request->name_contact,
            'lastname_contact' => $request->lastname_contact,
            'phone_contact' => $request->phone_contact,
            'email_contact' => $request->email_contact,
            'message_contact' => $request->message_contact,
            'subject' => 'Contacto de cliente'
        );

        Mail::send('emails.contacto', ['data' => $data], function($message) use ($data){
            $message->to(config('mail.username'));
            $message->subject($data['subject']);
            $message->from($data['email_contact']);
        });

        return redirect()->back()->with('ok', 'Su correo se ha enviado con éxito.');


    }


}
