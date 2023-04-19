<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(
            'eleves',
            function (Blueprint $table) {
                $table->id();
                $table->string('Matricule')->nullable();
                $table->string('Nom')->nullable();
                $table->string('Prénom')->nullable();
                $table->string('الاسم العائلي')->nullable();
                $table->string('الاسم الشخصي')->nullable();
                $table->string('Sexe')->nullable();
                $table->string('Email')->nullable();
                $table->text('Adress')->nullable();
                $table->date('date_naissance')->nullable();
                $table->unsignedBigInteger('parent_id')->nullable();
                $table->foreign('parent_id')->references('id')->on('parents');
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eleves');
    }
};
