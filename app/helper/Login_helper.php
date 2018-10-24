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

    public static function validateSession()
    {
        $login_model = new LoginModel();
        $session_id = session()->get('user_id_fk');
        if ($session_id) {
            $validate = $login_model->getUserID($session_id);
            if ($validate) {

            } else {
                header("Location:".url('/')."/login");

            }
        } else {
            header("Location:".url('/')."/login");
        }
    }

    public static function finalSession()
    {
        session()->flush();
    }
}
