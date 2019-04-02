<?php

namespace Nobre\Http\Controllers;

use Nobre\Models\Category;
use Nobre\Models\Work;
use Nobre\Models\Noticia;
use Nobre\Models\Servicio;
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
//        $data['estatutos'] = Work::count();
//        $data['noticias'] = Noticia::count();
//        $data['applicants'] = Servicio::count();
//        $data['categories'] = Category::count();

        return view('home')->with($data);
    }
}
