<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfissionaisHasTecnologias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profissionais_has_tecnologias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tecnologia_id');
            $table->foreign('tecnologia_id')->references('id')->on('tecnologias');
            $table->unsignedBigInteger('profissional_id');
            $table->foreign('profissional_id')->references('id')->on('profissionais');
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
        Schema::dropIfExists('profissionais_has_tecnologias');
    }
}
