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
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('cycle_nom');
            $table->string('niveau_nom');
            $table->foreign('cycle_nom')->references('Cycle')->on('cycles');
           
        });
         // Ajouter un index sur la colonne "Cycle" dans la table "cycles"
        Schema::table('niveaux', function (Blueprint $table) {
            $table->index('niveau');
        });

        // Ajouter la clé étrangère après avoir créé l'index
        Schema::table('classes', function (Blueprint $table) {
            $table->foreign('niveau_nom')->references('niveau')->on('niveaux');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classes');
    }
};
