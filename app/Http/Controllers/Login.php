<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libraries\Template;
use App\Libraries\Lib_login;


class Login extends Controller
{
    public $lib_login;

    public function __construct()
    {
        $this->lib_login = new Lib_login();
    }


    public function view_login()
    {
        $assets = [
            'css' => [
                url('/') . CSS . 'login/login.css'
            ],
            'js' => [
                url('/') . ANGULAR_CTRL . 'login_controller.js',
                url('/') . ANGULAR_SERVICES . 'login.service.js',
            ]
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
}
