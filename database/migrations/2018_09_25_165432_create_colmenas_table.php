<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColmenasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colmenas', function (Blueprint $table) {
            $table->increments('Id_Colmena');
            $table->string('Descripcion');
            $table->integer('cantidad')->unsigned();
            $table->integer('ubicacion_id')->unsigned();
            $table->foreign('ubicacion_id')->references('Id_Ubicacion')->on('ubicacions');
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
        Schema::dropIfExists('colmenas');
    }
}
/**
     * Run the migrations.