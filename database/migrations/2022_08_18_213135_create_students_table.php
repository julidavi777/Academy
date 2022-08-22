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
            $table->timestamps();
            $table->enum('document_type', ['CC', 'TI', 'CE', 'OTROS']);
            $table->integer('document_number');
            $table->string('identify_document');
            $table->string('document_issuing_country');
            $table->string('issuing_department');
            $table->string('issuing_municipality');
            $table->string('name', 45);
            $table->string('first_last_name', 45);
            $table->string('second_last_name', 45);
            $table->enum('gender', ['M', 'F']);
            $table->date('birth_date');
            $table->string('birth_country');
            $table->string('birth_department');
            $table->string('birth_municipality');
            $table->integer('stratum');


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
