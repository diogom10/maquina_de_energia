<?php

namespace App\Http\Controllers;

use App\helper\Login_helper;
use Illuminate\Http\Request;
use App\Libraries\Template;


class Home extends Controller
{

    public $helper_login;
    public function __construct()
    {
        $this->helper_login = new Login_helper();
    }
    public function view_home()
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
        return Template::load('home/home' ,'assets', $assets);
    }


}
