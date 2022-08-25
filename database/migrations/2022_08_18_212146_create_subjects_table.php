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
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->integer('hourly_intensity');
            $table->unsignedBigInteger('id_course');
            $table->unsignedBigInteger('id_teacher');
            $table->foreignId('id_teacher')->nullable()->constrained('teacher')->cascadeOnDelete()->nullOnDelete();            
            $table->foreignId('id_course')->nullable()->constrained('course_subject')->cascadeOnDelete()->nullOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subjects');
    }
};
