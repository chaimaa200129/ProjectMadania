<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicationsTable extends Migration
{
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->string('cycle');
            $table->unsignedBigInteger('niveau_id');
            $table->unsignedBigInteger('classe_id');
            $table->boolean('status')->default(false);
            $table->timestamps();
            
            // Ajoutez des clés étrangères si nécessaire
            // $table->foreign('niveau_id')->references('id')->on('niveaux');
            // $table->foreign('classe_id')->references('id')->on('classes');
        });
    }

    public function down()
    {
        Schema::dropIfExists('publications');
    }
}
