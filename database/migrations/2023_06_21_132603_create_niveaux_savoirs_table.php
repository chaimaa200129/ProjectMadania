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
    Schema::create('niveaux_savoirs', function (Blueprint $table) {
        $table->unsignedBigInteger('savoir_id');
        $table->unsignedBigInteger('niveau_id');
        // Ajoutez d'autres colonnes si nécessaire
        
        $table->foreign('savoir_id')->references('id')->on('savoirs')->onDelete('cascade');
        $table->foreign('niveau_id')->references('id')->on('niveaux')->onDelete('cascade');
        
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
   public function down()
{
    Schema::dropIfExists('niveaux_savoirs');
}

};
