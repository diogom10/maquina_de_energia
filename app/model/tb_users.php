<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class tb_users extends Model
{
    protected $table = 'tb_users';
    public $timestamps = true;

    public function teste(){
        return $this->get();
    }
}
