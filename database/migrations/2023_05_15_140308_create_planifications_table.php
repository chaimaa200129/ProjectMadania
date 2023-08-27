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
        Schema::create('planifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('savoir_id');
            $table->unsignedBigInteger('periode_id');
            $table->boolean('actif')->default(false);
            $table->unsignedBigInteger('niveau_id');
            $table->timestamps();

            $table->foreign('savoir_id')->references('id')->on('savoirs')->onDelete('cascade');
            $table->foreign('periode_id')->references('id')->on('periodes')->onDelete('cascade');
            $table->foreign('niveau_id')->references('id')->on('niveaux')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('planifications');
    }
};