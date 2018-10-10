<?php

namespace App\model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LoginModel extends Model
{
    public function insertUser($dados) {
        DB::table('tb_users')->insert($dados);
    }

}
