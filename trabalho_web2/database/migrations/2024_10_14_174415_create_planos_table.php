<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanosTable extends Migration
{
    public function up()
    {
        Schema::create('planos', function (Blueprint $table) {
            $table->id('id_plano');
            $table->enum('plano', ['max', 'base', 'plus']);
            $table->unsignedBigInteger('id_login');
            $table->foreign('id_login')->references('id')->on('login')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('planos');
    }
}

