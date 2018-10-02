<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsuarioMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Usuario', function (Blueprint $table) {
            $table->string('Id_Usuario',12)->Unique();
            $table->string('Nombre',20);
            $table->string('Apellido1',30);
            $table->string('Apellido2',30);
            $table->string('Telefono',15);
            $table->string('Correo',100)->unique();
            $table->string('Direccion',100);
            $table->datetime('Fecha_Ingreso');
            $table->string('Clave',20);
            $table->integer('Id_Genero')->unsigned();;
            $table->foreign('Id_Genero')->references('Id_Genero')->on('Genero');
            $table->integer('Id_Rol')->nullable()->unsigned();
            $table->foreign('Id_Rol')->references('Id_Rol')->on('Rol');
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Usuario');
    }
}
