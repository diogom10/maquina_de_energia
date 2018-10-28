<?php
/**
 * Created by PhpStorm.
 * User: diogo
 * Date: 16/10/2018
 * Time: 20:13
 */

namespace App\Libraries;

use App\Model\LoginModel;
use App\helper\Firestore_helper;
use Illuminate\Http\Request;

class Lib_login
{
    public $firestore;
    public $firebase;
    public $login_model;

    public function __construct()
    {
        date_default_timezone_set('America/Sao_Paulo');
        $helper = new Firestore_helper();
        $this->firebase = $helper->firebase();
        $this->firestore = $helper->firestore();
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
            'user_uid' => null
        ];
        $validate = $this->login_model->validUserName($user_data['user_name']);

        if ($validate) {
            $validate = $this->login_model->validEmail($user_data['user_email']);
            if ($validate) {
                $this->login_model->insertUser($user_data);
                $user = $this->login_model->getUser($user_data['user_name']);
                $validate = $this->cadastrarFirestore($user);
                if ($validate) {
                    $response['success'] = true;
                    $response['msg'] = 'Cadastro feito com sucesso';
                    $data['isMobile'] ? ($response['data'] = $user) : ($this->storageSession($user));
                } else {
                    $response['success'] = false;
                    $response['type'] = 'interno';
                    $response['msg'] = 'Parece que ocorreu um erro inesperado, por favor se cadastre novamente!';
                }
            } else {
                $response['success'] = false;
                $response['type'] = 'email';
                $response['msg'] = 'Este email ja esta sendo usado';
            }
        } else {
            $response['success'] = false;
            $response['type'] = 'nome';
            $response['msg'] = 'Este nome de usuario ja esta sendo usado';
        }

        return $response;

    }


    public function cadastrarFirestore($user)
    {
        $retorno = true;
        $auth = $this->firebase->getAuth();
        $new = $auth->createUserWithEmailAndPassword($user->user_email, $user->user_pass);
        $update = ['user_uid' => $new->uid];
        $this->login_model->updateUser($update, $user->user_id);
        if (isset($new->uid)) {
            $data = [
                'user_id' => $user->user_id,
                'user_name' => $user->user_name,
                'logged' => true,
                'timestamp'=>date('Y-m-d G:i:s')
            ];
            $documentid = (string)$new->uid;
            $this->firestore->setDocument('users', $documentid, $data);
        } else {
            $retorno = false;
            $this->login_model->deleteUser($user->user_id);
        }

        return $retorno;
    }

    public function login($data)
    {
        $response = [];
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
                $response['type'] = 'senha';
                $response['msg'] = 'Senha incorreta';
            }
        } else {
            $response['success'] = false;
            $response['type'] = 'nome';
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
        $this->firestore->updateDocument('users',  $data->user_uid, [
           'logged' => true,
            'timestamp'=>date('Y-m-d G:i:s')
        ], true);
        session($session);
    }

}