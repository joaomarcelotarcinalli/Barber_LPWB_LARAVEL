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
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('assinatura');
    }
};

