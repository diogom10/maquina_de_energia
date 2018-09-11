<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_user_data', function (Blueprint $table) {
            $table->increments('data_id');
            $table->integer('user_id_fk')->references('user_id')->on('tb_user')->onDelete('cascade');
            $table->string('user_full_name');
            $table->string('user_telefone');
            $table->string('user_pass');
            $table->enum('user_genero',['M' , 'F']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
