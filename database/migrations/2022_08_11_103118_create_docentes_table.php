<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docentes', function (Blueprint $table) {
            $table->id();//Llave primaria
            $table->timestamps();//Regista el tiempo de creacion de la tabla
            $table->string('nombres');//
            $table->string('apellidos');
            $table->string('titulo');
            $table->integer('edad');
            $table->date('fecha');
            $table->string('imagen');
            $table->string('documento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('docentes');
    }
};
