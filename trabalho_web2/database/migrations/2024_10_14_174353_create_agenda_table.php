<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendaTable extends Migration
{
    public function up()
    {
        Schema::create('agenda', function (Blueprint $table) {
            $table->id();
            $table->time('hora_marcada');
            $table->date('dt_marcada');
            $table->unsignedBigInteger('id_login');
            $table->foreign('id_login')->references('id')->on('login')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('agenda');
    }
};
