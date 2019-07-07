<?php

namespace Vertice\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
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

        $rules =  array('captcha' => ['required', 'captcha']);
        $validator = Validator::make(['captcha' => Input::get('captcha') ], $rules, [ 'captcha' => 'El captcha ingresado es incorrecto.' ]);

        if (!$validator->passes())
            return redirect()->back()->withInput(Input::except('captcha'))->withErrors($validator);


        // Define some constants
        define( "RECIPIENT_NAME", "Vertice Digital" );
        define( "RECIPIENT_EMAIL1", "fernando@verticedigital.com.ar" );
        define( "RECIPIENT_EMAIL2", "lucas@verticedigital.com.ar" );


        // Read the form values
        $success = false;
        $senderName = isset( $_POST['name'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['name'] ) : "";
        $senderLastname = isset( $_POST['last_name'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['last_name'] ) : "";
        $senderEmail = isset( $_POST['email'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['email'] ) : "";
        $phone = isset( $_POST['phone'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['phone'] ) : "";
        $message = isset( $_POST['message'] ) ? preg_replace( "/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['message'] ) : "";

        // If all values exist, send the email
        if ( $senderName && $senderEmail && $phone && $message) {
            $recipient1 = RECIPIENT_NAME . " <" . RECIPIENT_EMAIL1 . ">";
            $recipient2 = RECIPIENT_NAME . " <" . RECIPIENT_EMAIL2 . ">";
            $headers = "De: " . $senderName . " <" . $senderEmail . ">";
            //$msgBody = " Telefono: " . $phone . " Mensaje: " . $message . "";
            $msgBody = " Telefono: ". $phone . " --- ";
            $msgBody .= " Mensaje: " . $message;
            $success1 = mail( $recipient1, $headers, $msgBody );
            $success2 = mail( $recipient2, $headers, $msgBody );

            //Set Location After Successsfull Submission
            return redirect()->back()->with('ok', 'Su correo se ha enviado con éxito.');
            //header('Location: /');
        }

        else{
            //Set Location After Unsuccesssfull Submission
            header('Location: /');
            exit();
        }

//        $data = array(
//            'name' => $request['name'],
//            'lastname' => $request['last_name'],
//            'email' => $request['email'],
//            'phone' => $request['phone'],
//            'message' => $request['message'],
//            'subject' => 'Contacto de cliente'
//        );
//
//        dd($data);
//
//        Mail::send('emails.contacto', ['data' => $data], function($message) use ($data){
//            $message->to(explode(',', env('ADMIN_EMAILS')));
//            $message->subject($data['subject']);
//            $message->from($data['email']);
//        });

        //return redirect()->back()->with('ok', 'Su correo se ha enviado con éxito.');
    }


}
