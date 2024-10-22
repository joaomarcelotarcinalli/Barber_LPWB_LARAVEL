<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarbeiroTable extends Migration
{
    public function up()
    {
        Schema::create('barbeiro', function (Blueprint $table) {
            $table->id('id_barbeiro');
            $table->string('nome', 30);
            $table->string('especialidade', 20);
        });
    }

    public function down()
    {
        Schema::dropIfExists('barbeiro');
    }
};
