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
        Schema::create('course_subjet', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('id_course')->nullable()->constrained('courses')->cascadeOnDelete()->nullOnDelete();
            $table->foreignId('id_subject')->nullable()->constrained('subjects')->cascadeOnDelete()->nullOnDelete(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_subjet');
    }
};
