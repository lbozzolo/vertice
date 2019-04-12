<?php

namespace Ramiroquai\Http\Controllers;

use Ramiroquai\Models\Category;
use Ramiroquai\Models\Work;
use Ramiroquai\Models\Noticia;
use Ramiroquai\Models\Servicio;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = '';
        return view('home')->with($data);
    }
}
