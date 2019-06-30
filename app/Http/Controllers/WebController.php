<?php

namespace Vertice\Http\Controllers;

use Vertice\Http\Controllers\AppBaseController as AppBaseController;
use Vertice\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use Vertice\Models\Category;
use Vertice\Models\Project;
use Vertice\Models\Slider;

class WebController extends AppBaseController
{

    public function index()
    {
        $data['slider'] = Slider::where('active', '!=', null)->first();
        $data['projects'] = Project::where('active', '=', 1)->get();
        $data['categories'] = Category::all();

        return view('web.home')->with($data);
    }

    public function contacto()
    {
        return view('web.contact');
    }

    public function test()
    {
        $data = array(
            'name' => 'nombre',
            'lastname' => 'apellido',
            'email' => 'email',
            'phone' => 'telefono',
            'message' => 'mensaje',
            'subject' => 'Contacto de cliente'
        );

        return view('emails.contacto')->with(['data' => $data]);
    }

    public function postContacto(ContactRequest $request)
    {
        //dd($request->all());

        $data = array(
            'name' => $request['name'],
            'lastname' => $request['last_name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'message' => $request['message'],
            'subject' => 'Contacto de cliente'
        );

        //dd($data);

        Mail::send('emails.contacto', ['data' => $data], function($message) use ($data){
            $message->to(['lucas@verticedigital.com.ar', 'fernando@verticedigital.com.ar']);
            $message->subject($data['subject']);
            $message->from($data['email']);
        });

//        Mail::send('emails.contacto', ['data' => $data], function($message) use ($data){
//            $message->to('fernando@verticedigital.com.ar');
//            $message->subject($data['subject']);
//            $message->from($data['email']);
//        });

        return redirect()->back()->with('ok', 'Su correo se ha enviado con éxito.');
    }


}
