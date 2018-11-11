<?php

namespace App\Http\Controllers;

use App\helper\Login_helper;
use Illuminate\Http\Request;
use App\Libraries\Template;


class Painel extends Controller
{

    public $helper_login;
    public function __construct()
    {
        $this->helper_login = new Login_helper();
    }
    public function view_painel()
    {
        $this->helper_login->validateSession();
        $assets = [
            'css' => [
                url('/') . CSS . 'painel/painel.css'
            ],
            'js' => [
                url('/') . ANGULAR_CONSTANTS
            ],
            'active_header' => true
        ];
        return Template::load('painel/painel' ,'assets', $assets);
    }


}
