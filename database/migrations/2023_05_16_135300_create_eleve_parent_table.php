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
        Schema::create('eleve_parent', function (Blueprint $table) {
            $table->unsignedBigInteger('eleve_id');
            $table->unsignedBigInteger('parent_id');
            $table->string('relation_type');

            $table->foreign('eleve_id')->references('id')->on('eleves')->onDelete('cascade');
            $table->foreign('parent_id')->references('id')->on('parent_m_s')->onDelete('cascade');

            $table->primary(['eleve_id', 'parent_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eleve_parent');
    }
};
