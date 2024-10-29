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
            $table->enum('plano', ['base', 'base++', 'max', 'plus']);
            $table->double('valor', 8, 2);
        });
    }

    public function down()
    {
        Schema::dropIfExists('planos');
    }
}

