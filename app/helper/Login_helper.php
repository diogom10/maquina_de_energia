<?php
/**
 * Created by PhpStorm.
 * User: diogo
 * Date: 18/10/2018
 * Time: 21:29
 */

namespace App\helper;

use App\Model\LoginModel;


class Login_helper
{

    public function validateSession($login = false)
    {
        $login_model = new LoginModel();
        $session_id = session()->get('user_id_fk');
        if (!empty($session_id)) {
            $validate = $login_model->getUserID($session_id);
            if ($validate) {
                if ($login) {
                    header("Location:" . url('/') . "/painel");
                    die();
                }
            } else {
                header("Location:" . url('/') . "/login");
                die();
            }
        } else {
            if (!$login) {
                header("Location:" . url('/') . "/login");
                die();
            }
        }
    }

    public function finaleSession()
    {
        session()->flush();
    }
}

