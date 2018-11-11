<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libraries\Template;
use App\Libraries\Lib_login;
use App\helper\Login_helper;

class Login extends Controller
{
    public $lib_login;
    public $helper_login;
    public function __construct()
    {
        $this->lib_login = new Lib_login();
        $this->helper_login = new Login_helper();
    }


    public function view_login()
    {
        $this->helper_login->validateSession(true);
        $assets = [
            'css' => [
                url('/') . CSS . 'login/login.css'
            ],
            'js' => [
                url('/') . ANGULAR_CTRL . 'login_controller.js',
                url('/') . ANGULAR_SERVICES . 'login.service.js',
                url('/') . ANGULAR_CONSTANTS
            ],
            'active_header' => false
        ];
        return Template::load('login/login', 'assets', $assets);
    }

    public function setCadastro(Request $dados)
    {
        $data = $dados->post();
        return $this->lib_login->cadastrar($data);
    }

    public function setLogin(Request $dados)
    {
        $data = $dados->post();
        return $this->lib_login->login($data);
    }

    public function setLogout(Request $dados)
    {
        $this->lib_login->logout();
        $response["success"] = true;
        return $response;
    }
}
