<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbUsersTable extends Migration {


    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_users', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('user_name', 30)->nullable();
            $table->string('user_email', 60)->nullable();
            $table->string('user_pass', 100)->nullable();
            $table->string('user_cpf', 20)->nullable();
            $table->string('user_estado', 5)->nullable();
            $table->string('user_picture', 40)->nullable();
            $table->string('user_uid', 50)->nullable();
            $table->softDeletesTz();
            $table->timestamp('create_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
//            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
//        $table->enum('user_genero',['M' , 'F']);
//        $table->integer('user_id_fk')->references('user_id')->on('tb_user')->onDelete('cascade');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_users');
    }
}
