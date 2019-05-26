<?php

namespace Vertice\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Vertice\Http\Controllers\AppBaseController as AppBaseController;
use Vertice\Http\Requests\ContactRequest;
use Vertice\Models\Applicant;
use Illuminate\Support\Facades\Mail;
use Vertice\Models\Category;
use Vertice\Models\Image;
use Vertice\Models\Project;
use Vertice\Models\Slider;

class WebController extends AppBaseController
{

    public function index()
    {
        $data['slider'] = Slider::where('active', '!=', null)->first();
        $data['projects'] = Project::where('active', '=', 1)->get();
        $data['categories'] = Category::all();
        //dd($data);

        return view('web.home')->with($data);
    }

    public function contacto()
    {
        return view('web.contact');
    }

    public function sendDataApplicant(CreateApplicantRequest $request)
    {
        $input = $request->all();
        $item = Applicant::create($input);

        if (!$item)
            return redirect()->back()->withErrors('Ocurrió un error. No se pudieron enviar los datos');

        return Redirect::to(URL::previous() . "#contact")->with('ok', 'Se han enviado los datos con éxito');
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
