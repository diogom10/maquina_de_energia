<?php
/**
 * Created by PhpStorm.
 * User: diogo
 * Date: 16/10/2018
 * Time: 20:13
 */

namespace App\Libraries;

use App\Model\LoginModel;
use Illuminate\Http\Request;

class Lib_login
{

    public $login_model;

    public function __construct()
    {
        $this->login_model = new LoginModel();
    }


    public function cadastrar($data)
    {
        $validate = true;
        $response = [];
        $user_data = [
            'user_name' => $data['user_name'] ?? null,
            'user_email' => $data['user_email'] ?? null,
            'user_pass' => sha1($data['user_pass']) . SEMENTE ?? null,
            'user_cpf' => $data['user_cpf'] ?? null,
            'user_estado' => $data['user_estado'] ?? null,
        ];
        $validate = $this->login_model->validUserName($user_data['user_name']);

        if ($validate) {
            $validate = $this->login_model->validEmail($user_data['user_email']);
            if ($validate) {
                $this->login_model->insertUser($user_data);
                $response['success'] = true;
                $response['msg'] = 'Cadastro feito com sucesso';
            } else {
                $response['success'] = false;
                $response['msg'] = 'Este email ja esta sendo usado';
            }
        } else {
            $response['success'] = false;
            $response['msg'] = 'Este nome de usuario ja esta sendo usado';
        }

        return $response;

    }

    public function login($data)
    {
        $response = [];
        $validate = true;
        $user_data = [
            'user_name' => $data['user_name'] ?? null,
            'user_pass' => sha1($data['user_pass']) . SEMENTE ?? null,
        ];

        $validate = $this->login_model->validData($user_data['user_name']);
        if ($validate) {
            $validate = $this->login_model->validPass($user_data['user_pass']);
            if ($validate) {
                $response['success'] = true;
                $response['msg'] = 'Login efetuado com sucesso';
                $user = $this->login_model->getUser($user_data['user_name']);
                $data['isMobile'] ? ($response['data'] = $user) : ($this->storageSession($user));

            } else {
                $response['success'] = false;
                $response['msg'] = 'Senha incorreta';
            }
        } else {
            $response['success'] = false;
            $response['msg'] = 'Este usuario ou email não existe';
        }

        return $response;
    }

    public function storageSession($data)
    {
        $request = new  Request();
        $session = [
            'user_id_fk' => $data->user_id,
            'session_ip' => $request->ip(),
            'last_activity' => date('Y-m-d H:i:s')
        ];
        $this->login_model->insertSession($session);
        session($session);
        session()->get(  'user_id_fk');
    }

}