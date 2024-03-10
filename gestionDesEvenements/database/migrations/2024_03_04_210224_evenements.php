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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('organisateurId')->constrained('organisateurs')->onDelete('cascade');
            $table->foreignId('categoryId')->constrained('categories')->onDelete('cascade');
            $table->string('image');
            $table->string('title');
            $table->string('description');
            $table->date('date');
            $table->string('lieu');
            $table->integer('nbPlaces');
            $table->boolean('status')->default(0);
            $table->enum('acceptation', ['Automatique', 'Manuelle'])->default('Automatique');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
