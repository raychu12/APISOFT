<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AfiliadosMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('afiliados', function (Blueprint $table) {
            $table->string('Id_Afiliado',12)->Unique();
            $table->string('Nombre',20);
            $table->string('Apellido1',30);
            $table->string('Apellido2',30);
            $table->string('Telefono',15);
            $table->string('Correo',100)->unique();
            $table->string('Direccion',100);
            $table->datetime('Fecha_Ingreso');
            $table->string('Num_Cuenta',20);
            $table->integer('genero_id')->unsigned();;
            $table->foreign('genero_id')->references('Id_Genero')->on('Genero');
            $table->integer('estado_civil_id')->nullable()->unsigned();
            $table->foreign('estado_civil_id')->references('Id_Estado_Civil')->on('Estado_Civil');
            $table->boolean('Estado');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('afiliados');
    }
}
