<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('departement_enseignant', function (Blueprint $table) {
            $table->unsignedBigInteger('departement_id');
            $table->unsignedBigInteger('responsable_id');
            // Autres colonnes éventuelles pour des attributs supplémentaires dans la table de liaison

            $table->foreign('departement_id')->references('id')->on('departements')->onDelete('cascade');
            $table->foreign('responsable_id')->references('id')->on('enseignants')->onDelete('cascade');

            $table->primary(['departement_id', 'responsable_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('departement_enseignant');
    }
};