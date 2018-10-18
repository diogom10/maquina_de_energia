<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_sessions', function (Blueprint $table) {
            $table->increments('session_id')->unique();
            $table->unsignedInteger('user_id_fk')->nullable();
            $table->foreign('user_id_fk')->references('user_id')->on('tb_users');
            $table->string('session_ip', 45)->nullable();
            $table->integer('last_activity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sessions');
    }
}
