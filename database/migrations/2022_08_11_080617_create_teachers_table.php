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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();//Registra el tiempo de creación de la tabla
            $table->string('name', 255);
            $table->string('last_name', 255);
            $table->string('college_degree', 255);
            $table->integer('age');
            $table->date('contract_date');
            $table->string('imagen', 255);
            $table->string('identify_document', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
};
