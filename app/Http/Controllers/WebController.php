<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;

class WebController extends AppBaseController
{

    public function index()
    {
        return view('web.home');
    }


}
