<?php

namespace Amghi\Http\Controllers;

use Amghi\Models\Categoria;
use Amghi\Models\Estatuto;
use Amghi\Models\Noticia;
use Amghi\Models\Servicio;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['estatutos'] = Estatuto::count();
        $data['noticias'] = Noticia::count();
        $data['servicios'] = Servicio::count();
        $data['categorias'] = Categoria::count();

        return view('home')->with($data);
    }
}
