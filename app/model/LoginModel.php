<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LoginModel extends Model
{
    public function insertUser($dados)
    {
        DB::table('tb_users')->insert($dados);
    }


    public function validUserName($dados)
    {
        $response = DB::table('tb_users')
            ->select('user_name')
            ->where('user_name', $dados)->first();

        return !isset($response->user_name) ? true : false;
    }

    public function validEmail($dados)
    {
        $response = DB::table('tb_users')
            ->select('user_email')
            ->where('user_email', $dados)->first();
        return !isset($response->user_email) ? true : false;
    }

    public function validData($dados)
    {
        $response = DB::table('tb_users')
            ->select('user_email', 'user_name')
            ->where('user_name', $dados)
            ->orWhere('user_email', $dados)->first();
        return (isset($response->user_email) && isset($response->user_name)) ? true : false;
    }

    public function validPass($dados)
    {
        $response = DB::table('tb_users')
            ->select('user_pass')
            ->where('user_pass', $dados)->first();
        return isset($response->user_pass) ? true : false;
    }

    public function getUser($dados)
    {
        $response = DB::table('tb_users')
            ->select('user_email', 'user_name', 'user_id', 'user_cpf', 'user_estado')
            ->where('user_name', $dados)
            ->orWhere('user_email', $dados)->first();
        return $response;
    }

    public function insertSession($dados)
    {
        DB::table('tb_sessions')->insert($dados);
    }

}
