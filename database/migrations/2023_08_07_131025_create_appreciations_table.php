<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppreciationsTable extends Migration
{
    public function up()
    {
        Schema::create('appreciations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('eleve_id');
            $table->unsignedBigInteger('periode_id');
            $table->text('content'); // Contenu de l'appréciation
            $table->timestamps();

            // Définir les clés étrangères
            $table->foreign('eleve_id')->references('id')->on('eleves')->onDelete('cascade');
            $table->foreign('periode_id')->references('id')->on('periodes')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('appreciations');
    }
}
