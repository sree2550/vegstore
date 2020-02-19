<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('fk_login_id')->unsigned();
            $table->foreign('fk_login_id')->references('id')->on('login');
            $table->string('f_name');
            $table->string('l_name');
            $table->string('address');
            $table->string('place');
            $table->string('zip');
            $table->string('contact_number');
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
        Schema::dropIfExists('register');
    }
}
