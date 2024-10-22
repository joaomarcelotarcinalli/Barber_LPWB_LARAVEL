<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssinaturaTable extends Migration
{
    public function up()
    {
        Schema::create('assinatura', function (Blueprint $table) {
            $table->id('id_assin');
            $table->string('forma_pag', 20);
            $table->unsignedBigInteger('id_login');
            $table->foreign('id_login')->references('id')->on('login')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('assinatura');
    }
};

