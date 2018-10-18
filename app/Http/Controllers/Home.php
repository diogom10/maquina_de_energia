<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Libraries\Template;

class Home extends Controller
{

    public function painel()
    {
        return Template::load('painel/painel');

    }


}
