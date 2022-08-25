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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->enum('document_type', ['CC', 'TI', 'CE']);
            $table->integer('document_number');
            $table->string('identify_document');
            $table->date('expedition_date');
            $table->unsignedBigInteger('id_exped_muni');
            $table->string('exped_dept');
            $table->string('exped_land');
            $table->string('names', 45);
            $table->string('last_name1', 45);
            $table->string('last_name2', 45);
            $table->enum('gender', ['M', 'F', 'OTROS']);
            $table->date('birth_date');
            $table->unsignedBigInteger('id_birth_country');
            $table->unsignedBigInteger('id_birth_department');
            $table->unsignedBigInteger('id_birth_municipality');
            $table->integer('stratum');
            $table->unsignedBigInteger('id_course');
            $table->unsignedBigInteger('id_birth_muni');
            $table->timestamps();
            //A continuación se indica hacia donde apuntan estas foráneas
            $table->foreign('id_exped_muni')->references('id')->on('municipalities')->onDelete('cascade')->onUpdate('cascade');;
            $table->foreign('id_birth_muni')->references('id')->on('municipalities')->onDelete('cascade')->onUpdate('cascade');;
            $table->foreign('id_course')->references('id')->on('courses')->onDelete('cascade')->onUpdate('cascade');;
            $table->foreign('id_birth_country')->references('id')->on('countries')->onDelete('cascade')->onUpdate('cascade');;
            $table->foreign('id_birth_department')->references('id')->on('departments')->onDelete('cascade')->onUpdate('cascade');;
            $table->foreign('id_birth_municipality')->references('id')->on('municipalities')->onDelete('cascade')->onUpdate('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
