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
    Schema::create('plots', function (Blueprint $table) {
        $table->id();
        $table->string('location');
        $table->string('type')->nullable();
        $table->string('area')->nullable();
        $table->integer('seedlings_count')->nullable();
        $table->date('planted_at')->nullable();
        $table->string('name')->nullable();    // Dodato ovde
        $table->string('variety')->nullable(); // Dodato ovde
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plots');
    }
};
