<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Login extends Model
{
    public function insertUser($dados) {
        DB::table('tb_users')->insert($dados);
    }
}
