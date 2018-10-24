<?php

namespace App\Http\Controllers;
use App\helper\Login_helper;
use Illuminate\Http\Request;
use App\Libraries\Template;

class Home extends Controller
{

    public function painel()
    {
       Login_helper::validateSession();
       die();
        return Template::load('painel/painel');

    }


}
