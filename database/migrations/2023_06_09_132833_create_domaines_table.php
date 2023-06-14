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
        Schema::create('domaines', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('matiere_id');
            $table->string('libelle');
            $table->timestamps();

            $table->foreign('matiere_id')->references('id')->on('matieres')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('domaines');
    }
};
