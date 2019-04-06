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
//        $data['estatutos'] = Work::count();
//        $data['noticias'] = Noticia::count();
//        $data['applicants'] = Servicio::count();
//        $data['categories'] = Category::count();

        return view('home')->with($data);
    }
}
