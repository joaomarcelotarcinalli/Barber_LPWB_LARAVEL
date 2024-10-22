<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoginTable extends Migration
{
    public function up()
    {
        Schema::create('login', function (Blueprint $table) {
            $table->id();
            $table->string('usuario', 30);
            $table->string('senha', 50);
            $table->string('plano_user', 20);
        });
    }

    public function down()
    {
        Schema::dropIfExists('login');
    }
};

