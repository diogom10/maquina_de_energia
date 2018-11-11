<?php

namespace App\Http\Controllers;

use App\helper\Login_helper;
use Illuminate\Http\Request;
use App\Libraries\Template;


class Relatorios extends Controller
{

    public $helper_login;
    public function __construct()
    {
        $this->helper_login = new Login_helper();
    }
    public function view_relatorios()
    {
        $this->helper_login->validateSession();
        $assets = [
            'css' => [

            ],
            'js' => [
                url('/') . ANGULAR_CONSTANTS
            ],
            'active_header' => true
        ];
        return Template::load('profile/profile' ,'assets', $assets);
    }


}
