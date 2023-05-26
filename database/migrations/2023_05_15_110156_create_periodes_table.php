<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('periodes', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->unsignedBigInteger('ref_id')->nullable();
            $table->unsignedBigInteger('cycle_id');
            $table->timestamps();

            $table->foreign('ref_id')->references('id')->on('periodes')->onDelete('cascade');
            $table->foreign('cycle_id')->references('id')->on('cycles')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('periodes');
    }
};

