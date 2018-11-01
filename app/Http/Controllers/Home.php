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


        $assets = [
            'css' => [
                url('/') . CSS . 'painel/painel.css'
            ],
            'js' => [
            ],
            'active_header' => true
        ];
        return Template::load('painel/painel' ,'assets', $assets);
    }


}
