<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libraries\Template;
use App\Model\LoginModel;

class Login extends Controller
{

    public function login()
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

    public function setLogin(Request $dados)
    {
        $response['success'] = true;
        $user_data =  $dados->post();
        $model = new LoginModel();
        $model->insertUser($user_data );
        return $response;
    }


}
