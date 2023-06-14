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
        Schema::create('competences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('domaine_id');
            $table->string('libelle');
            $table->timestamps();

            $table->foreign('domaine_id')->references('id')->on('domaines')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('competences');
    }
};
