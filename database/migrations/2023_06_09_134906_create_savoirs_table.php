<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('savoirs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('competence_id');
            $table->unsignedBigInteger('periode_id');
            $table->string('libelle');
            $table->timestamps();

            $table->foreign('competence_id')->references('id')->on('competences')->onDelete('cascade');
            $table->foreign('periode_id')->references('id')->on('periodes')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('savoirs');
    }
};
