<?php

namespace Vertice\Http\Controllers;

use Vertice\Models\Category;
use Vertice\Models\Work;
use Vertice\Models\Noticia;
use Vertice\Models\Servicio;
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
