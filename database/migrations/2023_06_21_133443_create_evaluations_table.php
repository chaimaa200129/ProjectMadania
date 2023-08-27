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
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('eleve_id');
            $table->unsignedBigInteger('savoir_id');
            $table->unsignedBigInteger('periode_id');
            $table->string('code');
            $table->timestamps();

            $table->foreign('eleve_id')->references('id')->on('eleves');
            $table->foreign('savoir_id')->references('id')->on('savoirs');
            $table->foreign('periode_id')->references('id')->on('periodes');
            $table->unsignedBigInteger('status_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluations');
    }
};
